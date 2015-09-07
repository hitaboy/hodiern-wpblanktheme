var gulp          = require('gulp'),
    less          = require('gulp-less'),
    concat        = require('gulp-concat'),
    browserSync   = require('browser-sync').create(),
    notify        = require("gulp-notify"),
    uglify        = require('gulp-uglify');

gulp.task('lessComp', function() { 
  return gulp.src('./less/style.less')
    .pipe(less())
    .pipe(gulp.dest('./'));
});

gulp.task('jsConcat', function() { 
  return gulp.src([
  './js/modernizr.min.js',
  './js/vendor/skrollr.min.js',
  './js/jquery-2.1.3.js',
  './js/vendor/bootstrap/bootstrap.min.js',
  './js/vendor/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js'])
    .pipe(concat('min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./js/scripts-min'))
    .pipe(browserSync.stream())
    .pipe(notify("COMPLOT > JS concat MAIN MIN DONE"));
});

gulp.task('watch', function() {
    browserSync.init({
      proxy: "tenemosunplan.com"
    });
    gulp.watch('./less/*.less', ['lessComp']);
    gulp.watch('./js/*.js', ['jsConcat']);
    //gulp.watch('./js/vendor/*.js', ['jsConcat']);
    gulp.watch("./**/*.php").on('change', browserSync.reload);
});