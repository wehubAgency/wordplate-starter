const mix = require('laravel-mix');

require('dotenv').config();

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

const theme = process.env.WP_THEME;

const resources = 'resources/assets';
const themePath = 'public/themes/wordplate';
const assetsPath = `${themePath}/assets`;

mix.setPublicPath(assetsPath);
mix.setResourceRoot('../');

mix.disableNotifications();
if ((process.env.NODE_ENV = 'development')) {
  mix.webpackConfig({
    module: {
      rules: [
        {
          enforce: 'pre',
          test: /\.js$/,
          exclude: /node_modules/,
          use: ['eslint-loader'],
        },
      ],
    },
  });
  mix.browserSync({
    proxy: 'localhost:8000',
    files: [
        `${themePath}/**/*.php`,
        `${assetsPath}/**/*.js`,
        `${assetsPath}/**/*.css`
    ]
  });
}
mix.js(`${resources}/scripts/app.js`, 'scripts');
mix.sass(`${resources}/styles/app.scss`, 'styles');

if (mix.config.inProduction) {
  mix.version();
}
