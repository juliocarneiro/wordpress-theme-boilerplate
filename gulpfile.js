var gulp        = require('gulp'),
    sass        = require('gulp-sass'),
    imagemin    = require('gulp-imagemin'),
    changed     = require('gulp-changed');
 
gulp.task('sass', function () {
    gulp.src('./assets/sass/style.scss')
        .pipe(sass({compass: true}))
        .on('error', function (err) { console.log(err.message); })
        .pipe(gulp.dest('./assets/css'));
});
 
gulp.task('jpg', function() {
    gulp.src('./assets/img/**/*.jpg')
        .pipe(changed('./assets/img/'))
        .pipe(imagemin({
            progressive: true
        }))
        .pipe(gulp.dest('./assets/img/'));
});
 
gulp.task('watch', ['sass', 'jpg'], function () {
    gulp.watch('./assets/sass/**/*.scss', ['sass']);
});