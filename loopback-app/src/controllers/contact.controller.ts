import {post, requestBody, HttpErrors} from '@loopback/rest';
import * as nodemailer from 'nodemailer';

interface ContactRequest {
  name: string;
  email: string;
  subject: string;
  message: string;
}

const EMAIL_REGEX = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

export class ContactController {
  @post('/api/contact', {
    responses: {
      '200': {description: 'Message sent successfully'},
    },
  })
  async sendContact(
    @requestBody({
      content: {
        'application/json': {
          schema: {
            type: 'object',
            required: ['name', 'email', 'subject', 'message'],
            properties: {
              name: {type: 'string'},
              email: {type: 'string'},
              subject: {type: 'string'},
              message: {type: 'string'},
            },
          },
        },
      },
    })
    body: ContactRequest,
  ): Promise<{ok: boolean}> {
    const {name, email, subject, message} = body;

    if (!name?.trim() || !email?.trim() || !subject?.trim() || !message?.trim()) {
      throw new HttpErrors.BadRequest("Усі поля обов'язкові");
    }
    if (name.trim().length > 100) {
      throw new HttpErrors.BadRequest("Ім'я занадто довге (макс. 100 символів)");
    }
    if (!EMAIL_REGEX.test(email.trim())) {
      throw new HttpErrors.BadRequest('Некоректний email');
    }
    if (subject.trim().length > 200) {
      throw new HttpErrors.BadRequest('Тема занадто довга (макс. 200 символів)');
    }
    if (message.trim().length > 5000) {
      throw new HttpErrors.BadRequest('Повідомлення занадто довге (макс. 5000 символів)');
    }

    const mailUser = process.env.MAIL_USER;
    const mailPass = (process.env.MAIL_PASS ?? '').replace(/s/g, '');
    const mailFrom = process.env.MAIL_FROM;

    if (!mailUser || !mailPass || !mailFrom) {
      throw new HttpErrors.InternalServerError('Email service not configured');
    }

    const transporter = nodemailer.createTransport({
      host: 'smtp.gmail.com',
      port: 587,
      secure: false,
      auth: {user: mailUser, pass: mailPass},
    });

    await transporter.sendMail({
      from: `"Roman Herts" <${mailFrom}>`,
      to: mailUser,
      replyTo: `"${name.trim()}" <${email.trim()}>`,
      subject: `[CV Site] ${subject.trim()}`,
      text:
        `Ім'я:  ${name}\nEmail: ${email}\nТема:  ${subject}\n\n${message}`,
      html: `
        <p><strong>Від:</strong> ${escapeHtml(name)} &lt;${escapeHtml(email)}&gt;</p>
        <p><strong>Тема:</strong> ${escapeHtml(subject)}</p>
        <hr/>
        <p style="white-space:pre-wrap">${escapeHtml(message)}</p>
      `,
    });

    return {ok: true};
  }
}

function escapeHtml(str: string): string {
  return str
    .replace(/&/g, '&amp;')
    .replace(/</g, '&lt;')
    .replace(/>/g, '&gt;')
    .replace(/"/g, '&quot;');
}
