'use strict';

import gulp from 'gulp';
import gulpLoadPlugins from 'gulp-load-plugins';

const $ = gulpLoadPlugins();

gulp.task('babel', () =>
  gulp.src('src/es6/*.js')
    .pipe($.babel())
    .pipe(gulp.dest('dist'))
);

gulp.task('jshint', () =>
  gulp.src('src/es5/*.js')
    .pipe($.jshint({node: true}))
    .pipe($.jshint.reporter('jshint-stylish'))
);

gulp.task('eshint', () =>
  gulp.src('src/es6/*.js')
    .pipe($.eslint())
    .pipe($.eslint.format())
    .pipe($.eslint.failOnError())
);
