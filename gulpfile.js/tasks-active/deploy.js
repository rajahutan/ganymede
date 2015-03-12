var gulp = require('gulp');
var rsync = require('gulp-rsync');
var config = require('../config').deploy;
 
gulp.task('deploy', function() {
  gulp.src('./build/**')
    .pipe(rsync({
      root: 'build',
      destination: config.build
    }));
});
