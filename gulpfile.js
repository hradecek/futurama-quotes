'use strict';

/* Imports */
var gulp = require('gulp');
var sassc = require('gulp-sass');
var rename = require('gulp-rename');
var minifyCss = require('gulp-clean-css');

/* Directories */
var cssDir = 'public/css/';
var sassDir = 'resources/assets/sass/';

gulp.task('sass', function () {
    gulp.src(sassDir + '/**/*.scss')
        .pipe(sassc())
        .pipe(minifyCss())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(cssDir))
});

gulp.task('sass:watch', function () {
    gulp.watch(sassDir + '/**/*.scss', ['sass'])
});
