let gulp          = require('gulp'),
    sass          = require('gulp-sass'),
    // cssmin        = require('gulp-cssmin');
    browserSync   = require('browser-sync');

gulp.task('sass', function() {
  return gulp.src('www/sass/**/*.scss')
      .pipe(sass())
      // .pipe(cssmin())
      .pipe(gulp.dest('www/css'))
      .pipe(browserSync.reload({stream: true}))
});

gulp.task('browser-sync', function () {
  browserSync({
    server: {
      baseDir: 'www'
    },
    notify: false
  });
});

gulp.task('watch', ['browser-sync', 'sass'], function () {
  gulp.watch('www/sass/**/*.scss', ['sass']);
  gulp.watch('www/*.html', browserSync.reload);
  gulp.watch('www/js/**/*.js', browserSync.reload);
});
