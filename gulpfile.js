// Requires Gulp v4.
// $ npm uninstall --global gulp gulp-cli
// $ rm /usr/local/share/man/man1/gulp.1
// $ npm install --global gulp-cli
// $ npm install
const { src, dest, watch, series, parallel } = require('gulp');
const browsersync = require('browser-sync').create();
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const plumber = require('gulp-plumber');
const sasslint = require('gulp-sass-lint');
const cache = require('gulp-cached');
const notify = require('gulp-notify');
const beeper = require('beeper');

sass.compiler = require('sass');

// Compile CSS from Sass.
function buildStyles() {
  return src('./src/scss/*.scss')
    .pipe(plumbError()) // Global error handler through all pipes.
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'compressed' }))
    .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7']))
    .pipe(sourcemaps.write())
    .pipe(dest('dist/css'))
    .pipe(browsersync.reload({ stream: true }));
}

// Watch changes on all *.scss files, lint them and
// trigger buildStyles() at the end.
function watchFiles() {
  watch(
    ['src/scss/*.scss', 'src/scss/**/*.scss'],
    { events: 'all', ignoreInitial: false },
    // series(sassLint, buildStyles)
    series(buildStyles)
  );
}

// Init BrowserSync.
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
    proxy: 'http://pstudio.loc/', // Change this value to match your local URL.
    socket: {
      domain: 'localhost:3000'
    }
  });
  done();
}

// Init Sass linter.
function sassLint() {
  return src(['src/scss/*.scss', 'src/scss/**/*.scss'])
    .pipe(cache('sasslint'))
    .pipe(sasslint({
      // configFile: '/.sass-lint.yml',
      ignore: '/dist/vendor/bootstrap/scss/bootstrap.scss',
      rules: {
        'property-sort-order': false,
        'quotes': false,
        'class-name-format': 'bemstrict',
        'leading-zero': 'always',
      }
    }))
    .pipe(sasslint.format())
    .pipe(sasslint.failOnError());
}

// Error handler.
function plumbError() {
  return plumber({
    errorHandler: function (err) {
      notify.onError({
        templateOptions: {
          date: new Date()
        },
        title: "Gulp error in " + err.plugin,
        message: err.formatted
      })(err);
      beeper();
      this.emit('end');
    }
  })
}

// Export commands.
exports.default = parallel(browserSync, watchFiles); // $ gulp
exports.sass = buildStyles; // $ gulp sass
exports.watch = watchFiles; // $ gulp watch
exports.build = series(buildStyles); // $ gulp build