'use strict';

/* Imports */
var gulp = require('gulp');
var sassc = require('gulp-sass');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var minifyCss = require('gulp-clean-css');

/* Directories */
var cssDir = 'public/css/';
var sassDir = 'resources/assets/sass/';
var jsDir = 'public/js';
var jsSrcDir = 'resources/assets/js';
var nodeModules = 'node_modules/';

gulp.task('sass', function () {
    gulp.src(sassDir + '/**/*.scss')
        .pipe(sassc())
        .pipe(minifyCss())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(cssDir))
});

gulp.task('js', function () {
    gulp.src(jsSrcDir + '/**/*.js')
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(jsDir));
});

gulp.task('libs', function () {
    gulp.src(nodeModules + '/jquery-custom/jquery.1/dist/jquery.min.js')
        .pipe(gulp.dest(jsDir));
});

gulp.task('sass:watch', function () {
    gulp.watch(sassDir + '/**/*.scss', ['sass'])
});

gulp.task('default', ['sass', 'js', 'libs']);

