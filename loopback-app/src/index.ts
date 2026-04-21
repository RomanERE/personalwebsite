import 'dotenv/config';
import {ApplicationConfig} from '@loopback/core';
import {CvApplication} from './application';

export async function main(options: ApplicationConfig = {}) {
  const app = new CvApplication(options);
  await app.boot();
  await app.start();

  const url = app.restServer.url;
  console.log(`Server is running at ${url}`);
  console.log('Press CTRL+C to stop');
  return app;
}

main({
  rest: {
    port: +(process.env.PORT ?? 3000),
    host: '0.0.0.0',
    openApiSpec: {
      setServersFromRequest: true,
    },
  },
}).catch(err => {
  console.error('Cannot start the application.', err);
  process.exit(1);
});
