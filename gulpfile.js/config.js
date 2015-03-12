/* ---------------------------------------
    CONFIG
   --------------------------------------- */

var title             = 'ganymede';

// Project paths
var src               = './src/';
var build             = './build/';
var dist              = './dist/';
var deploy            = '/Volumes/Macintosh\ HD/Users/reinierladan/dev/sandbox/wp-dev-box/awesome.dev/wp-content/themes/';
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

  wptheme: {
    source: [src+'/**/*.php',src+'/**/*.css',src+'screenshot.png'],
    build: build,
    dist: dist
  },

  watch: {
    source: {
      styles : src+'**/*.scss',
      wptheme : [src+'/**/*.php',src+'/**/*.css',src+'screenshot.png'],
      build : build
    }
  },

  deploy: {
    build: deploy+title+'/'
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
