var gulp = require('gulp');

gulp.task('default', ['init','watch']);
gulp.task('init', ['images','styles']);
gulp.task('dist', ['images:dist','styles:dist']);
