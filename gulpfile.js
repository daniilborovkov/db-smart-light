var gulp = require('gulp'),
notify = require('gulp-notify'),
minifyJS = require('gulp-minify'),
concat = require('gulp-concat'),
sass = require('gulp-sass');

gulp.task('build', ['styles_vendor', 'sass', 'js'], function () {
  gulp.src('./').pipe(notify('Build completed!'));
});

gulp.task('stream', ['build'], function () {
    gulp.watch('sass/**/*', ['sass_notify']);
});

gulp.task('sass', function () {
  gulp.src('./sass/style.scss')
    .pipe(sass())
    .on('error', notify.onError(function (err) {
            return 'Scss: ' + err;
        }))
    .pipe(gulp.dest('./'));
});

gulp.task('sass_notify', function () {
  gulp.src('./sass/style.scss')
    .pipe(sass())
    .on('error', notify.onError(function (err) {
            return 'Scss: ' + err;
        }))
    .pipe(notify('Scss compilation finished!'))
    .pipe(gulp.dest('./'));
});

gulp.task('styles_vendor', function () {
  gulp.src('./node_modules/font-awesome/css/font-awesome.min.css')
    .pipe(gulp.dest('./css/'));

  gulp.src('./node_modules/font-awesome/fonts/**/*')
    .pipe(gulp.dest('./fonts/'));

  console.log('font awesome prepared');
});

gulp.task('js', function () {
  gulp.src([
      './node_modules/bootstrap/dist/js/bootstrap.min.js',
      './js/assets/jquery.count-to.js',
      './js/assets/jquery.easing.1.3.js',
      './js/assets/canvas-progress.js',
      './js/assets/waypoints.js',
      './js/assets/script.js',
    ])
    .pipe(concat('script.js'))
    .pipe(minifyJS())
    .pipe(gulp.dest('./js/'));
})