'use strict';

var gulp = require('gulp');
var config = require('./gulpconfig.js');
var del = require('del');
var pngquant = require('imagemin-pngquant');
var runSequence = require('run-sequence');

// load plugins
var $ = require('gulp-load-plugins')();

gulp.task('hello', function() {
  console.log('Hello World');
});

// js文法チェック
gulp.task('jshint', function() {
  gulp.src(config.src +'/scripts/**/*.js')
    .pipe($.jshint())
    .pipe($.jshint.reporter('jshint-stylish'));
});

// js圧縮
gulp.task('scripts', function() {
  gulp.src(config.src +'/scripts/app/main.js')
    .pipe($.uglify({preserveComments: 'some'}))
    .pipe(gulp.dest(config.dest +'/scripts'));
});

// sassコンパイル
gulp.task('styles', function() {
  gulp.src(config.src +'/styles/*.scss')
    .pipe($.plumber())
    .pipe($.sass())
    .pipe(gulp.dest(config.dest +'/styles'));
});

// 画像圧縮
gulp.task('images', function() {
  gulp.src(config.src +'/images/**/*')
    .pipe($.cache($.imagemin({
      progressive: true,
      interlaced: true,
      // 圧縮率は上がるが、画質も落ちる
      use: [
        pngquant({
          quality: '60-80',
          speed: 1
        })
      ]
    })))
    .pipe(gulp.dest(config.dest +'/images'))
    .pipe($.size({title: 'images'}));
});

// sassファイルの更新を検知して自動コンパイルさせる
gulp.task('watch', function() {
  gulp.watch([config.src +'/styles/*.scss'], ['styles']);
});

// outputディレクトリ内のファイルを削除
gulp.task('clean', del.bind(null, ['dist/*', '!dist/.gitkeep'], {dot: true }));

// build
gulp.task('build', function() {
  runSequence(
    'clean',
    ['styles', 'scripts', 'images']
  )
});
