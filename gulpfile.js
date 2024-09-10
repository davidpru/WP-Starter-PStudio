const { src, dest, watch, series, parallel } = require("gulp");
const gulp = require('gulp');
const browsersync = require("browser-sync").create();
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require("gulp-sourcemaps");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const beeper = require("beeper");
const autoprefixer = require("gulp-autoprefixer");

sass.compiler = require("sass");

const BROWSERSLIST = ['> 5.5%', 'last 2 versions', 'Firefox ESR', 'not dead'];

// Compilar CSS desde SASS o SCSS.
function buildStyles() {
  return src("src/scss/**/*.scss")
    .pipe(plumbError()) // Global error handler through all pipes.
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write('map'))
    .pipe(dest("dist/css"))

    .pipe(browsersync.reload({ stream: true }));
}

function watchFiles() {
  watch(
    ["src/scss/**/*.scss"],
    { events: "all", ignoreInitial: false },
    // series(sassLint, buildStyles)
    series(buildStyles)
  );
}

// Init BrowserSync
function browserSync(done) {
  //watch files
  const files = [
    ".dist/css/*.css",
    ".dist/js/*.js",
    ".dist/js/*/*.js",
    ".dist/*/*/*.js",
    "./*.js",
    "./*/*.js",
    "./*/*/*.js",
    "./*/*.php",
    "./*.php",
    "./src/scss/*.scss",
    "./src/scss/*/*.scss",
  ];

  browsersync.init(files, {
    // Trabajando con carpeta local
    // server: {
    //   baseDir: "./"
    // },

    // Añadir url para proxy, en caso de trabajar con host. 
    proxy: "https://www.prunonosa.dev/",

    // Socket, este no cambia
    socket: {
      domain: "localhost:3000",

    },
  });
  done();
}

// Error handler.
function plumbError() {
  return plumber({
    errorHandler: function (err) {
      notify.onError({
        templateOptions: {
          date: new Date(),
        },
        title: "Gulp error in " + err.plugin,
        message: err.formatted,
      })(err);
      beeper();
      this.emit("end");
    },
  });
}




exports.default = parallel(browserSync, watchFiles); // $ gulp
exports.sass = buildStyles; // $ gulp sass
exports.watch = watchFiles; // $ gulp watch
exports.build = series(buildStyles); // $ gulp build