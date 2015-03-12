var gulp      = require('gulp');
var config    = require('../config').watch;

gulp.task('watch', function() {
  gulp.watch(config.source.styles, ['styles','deploy']);
  gulp.watch(config.source.wptheme, ['wptheme','deploy']);
});
