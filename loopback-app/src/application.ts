import {BootMixin} from '@loopback/boot';
import {ApplicationConfig} from '@loopback/core';
import {RestApplication} from '@loopback/rest';
import path from 'path';

export class CvApplication extends BootMixin(RestApplication) {
  constructor(options: ApplicationConfig = {}) {
    super(options);

    this.static('/', path.join(__dirname, '../public'));

    this.projectRoot = __dirname;
    this.bootOptions = {
      controllers: {
        dirs: ['controllers'],
        extensions: ['.controller.js'],
        nested: true,
      },
    };
  }
}
