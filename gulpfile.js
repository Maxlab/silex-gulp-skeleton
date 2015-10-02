'use strict';

var gulp = require('gulp'),
    livereload = require('gulp-livereload');

gulp.task('watch', function() {
  livereload.listen({start: true});
  gulp.watch('app/Resources/**').on('change', livereload.changed);
  gulp.watch('app/config/**').on('change', livereload.changed);
  gulp.watch('src/**').on('change', livereload.changed);
  gulp.watch('web/src/**').on('change', livereload.changed);
});

gulp.task('default', ['watch']);
