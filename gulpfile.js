'use strict';

var gulp = require('gulp'),
    livereload = require('gulp-livereload'),
    sass   = require('gulp-sass'),
    concat = require('gulp-concat'),
    csso   = require('gulp-csso'),
    bc     = './bower_components/',
    web    = './web/',
    vendor = web+'vendor/',
    build  = web+'build/',
    src    = web+'src/';

gulp.task('js', function() {
  gulp.src(src+'**/*.js')
    .pipe(concat('app.js'))
    .pipe(gulp.dest(build+'js/'))
});

gulp.task('sass', function () {
  gulp.src(src+'**/*.scss')
      .pipe(sass())
      .pipe(concat('style.min.css'))
      .pipe(csso())
      .pipe(gulp.dest(build+'css/'));
});

gulp.task('libs', function() {
  gulp.src(bc+'jquery/dist/jquery.js')
      .pipe(gulp.dest(vendor+'libs/js/'));
  gulp.src(bc+'bootstrap/dist/**/*.*')
      .pipe(gulp.dest(vendor+'libs/bootstrap/'));
});

gulp.task('watch', function() {
  livereload.listen({start: true});
  gulp.watch('app/Resources/**').on('change', livereload.changed);
  gulp.watch('app/config/**').on('change', livereload.changed);
  gulp.watch('src/**').on('change', livereload.changed);
  gulp.watch('web/src/**').on('change', livereload.changed);

  gulp.watch(src+'**/*.js', ['js']);
  gulp.watch(src+'**/*.scss', ['sass']);

  gulp.watch(bc+'**/*.js', ['js']);
  gulp.watch(bc+'**/*.scss', ['sass']);
});


gulp.task('default', [
  'libs',
  'js',
  'sass',
  'watch'
]);
