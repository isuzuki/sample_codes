'use strict';

var gulp = require('gulp');
var $ = require('gulp-load-plugins')();

gulp.task('babel', function() {
  gulp.src('src/es6/*.js')
    .pipe($.babel())
    .pipe(gulp.dest('dist'));
});

gulp.task('jshint', function() {
  gulp.src('src/es5/*.js')
    .pipe($.jshint({node: true}))
    .pipe($.jshint.reporter('jshint-stylish'));
});


gulp.task('eshint', function() {
  gulp.src('src/es6/*.js')
    .pipe($.eslint())
    .pipe($.eslint.format())
    .pipe($.eslint.failOnError());
});
