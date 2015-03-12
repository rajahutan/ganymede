/* ---------------------------------------
    CONFIG
   --------------------------------------- */

// Project paths
var src               = './src/';
var build             = './build/';
var dist              = './dist/';
var node_modules      = './node_modules/';
var bower_components  = './bower_components/';

module.exports = {
  styles: {
    source: src+'**/*.scss',
    build: build,
    dist: dist,
    sass: {
      includePaths: [
        bower_components+'bourbon/app/assets/stylesheets',
        bower_components+'neat/app/assets/stylesheets',
        src+'styles/'
      ]
    }
  },

  images: {
    source: src+'images/**/*',
    build: build+'images/',
    dist: dist+'images/'
  },

  watch: {
    source: {
      styles : src+'**/*.scss',
    }
  },

  clean: {
    all: [build, dist, './.sass-cache/'],
    build: build,
    dist: dist
  },

  dist: {
    deploy: dist
  }
}
