var gulp          = require('gulp');
var browserSync   = require('browser-sync');
var reload        = browserSync.reload;
var autoPrefixer  = require('gulp-autoprefixer');
var sass          = require('gulp-sass');
var sourcemaps    = require('gulp-sourcemaps');


// browser-sync tarea para lanzar el server .
gulp.task('browser-sync', function() {
  //watch files
  var files = [
  '.dist/css/*.css',
  '.dist/js/*.js',
  './*.js',
  './*/*.php',
  './*.php',
  './src/scss/*.scss',
  './src/scss/*/*.scss'
  ];

  //initialize browsersync
  browserSync.init(files, {

  //browsersync with a php server
  proxy: "http://starter-theme.loc/",
  notify: false

   // server: {
   //   baseDir: "./"
   //   }

 });
});

// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
gulp.task('sass', function () {
  return gulp.src('./src/scss/*.scss')
  .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'nested' })
      .on('error', sass.logError)
      )
      .pipe(
        autoPrefixer({
          // overrideBrowserslist: ['last 2 versions', 'ie >= 11'],
          cascade: false,
        })
      )
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./dist/css/'))
    .pipe(reload({ stream:true }));
});

// Default task to be run with `gulp`
gulp.task('default', ['sass', 'browser-sync'], function () {
  gulp.watch("./src/scss/*/*.scss", ['sass']);
  gulp.watch("./src/scss/*.scss", ['sass']);
});
