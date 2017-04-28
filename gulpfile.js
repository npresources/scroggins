var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function () {
  return gulp.src('assets/styles/sass/main.scss')
    .pipe(sass(
    {
        includePaths: ['node_modules/foundation-sites/scss/']
    }
    ).on('error', sass.logError))
    .pipe(gulp.dest('assets/styles/'));
});

gulp.task('sass:watch', function () {
  gulp.watch('assets/styles/sass/*.scss', ['sass']);
});

gulp.task('default', function() {
});
