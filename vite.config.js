import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import sass from 'vite-plugin-sass';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css','resources/js/app.js'],
      refresh: true,
    }),
    sass({
      input: [
        'resources/sass/app.scss',
      ],
      refresh: true,
    }),
  ],
});
