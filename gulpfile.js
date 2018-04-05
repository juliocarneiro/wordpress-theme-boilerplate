gulp        = require('gulp'),
sass        = require('gulp-sass'),
changed     = require('gulp-changed'),
browserSync = require('browser-sync');
imagemin    = require('gulp-imagemin');

gulp.task('sass', function () {
gulp.src('./style.scss')
    .pipe(sass({outputStyle: 'compressed'}))
    .on('error', function (err) { console.log(err.message); })
    .pipe(gulp.dest('./'));
});

gulp.task('watch', ['sass'], function () {
    gulp.watch('./**/*.scss', ['sass']);
    gulp.src('./assets/img/*').pipe(imagemin()).pipe(gulp.dest('img'))
});