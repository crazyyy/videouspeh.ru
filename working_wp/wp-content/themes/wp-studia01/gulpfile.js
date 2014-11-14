'use strict';
// generated on 2014-09-06 using generator-gulp-bootstrap 0.0.4

var gulp = require('gulp');
var gutil = require('gulp-util');

// load plugins
var $ = require('gulp-load-plugins')();

gulp.task('styles', function () {
    return gulp.src('sass/*.scss')
        .pipe($.sass({errLogToConsole: true}))
        .pipe($.autoprefixer('last 1 version'))
        .pipe(gulp.dest('./'))
        .pipe($.size())
        .pipe($.notify("Compilation complete."));;
});


gulp.task('watch'/*, ['serve']*/, function () {
    gulp.watch('sass/**/*.scss', ['styles']);

});
