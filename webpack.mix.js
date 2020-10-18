const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .js("resources/js/app.js", "public/js")
  .copy("node_modules/tau-prolog/modules/core.js", "public/js/tau-prolog")
  .copy(
    "resources/js/tau-prolog/draw-derivation-trees.js",
    "public/js/tau-prolog"
  )
  .postCss("resources/css/app.css", "public/css", [
    require("postcss-import"),
    require("tailwindcss"),
  ])
  .webpackConfig({
    node: {
      fs: "empty",
      child_process: "empty",
    },
  })
  .browserSync("prolog.test");
