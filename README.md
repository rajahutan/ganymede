# Ganymede — A Wordpress Theme

## Tools for development
- [Sass](http://sass-lang.com) parser with:
  - [Bourbon](http://bourbon.io)
  - [Neat](http://neat.bourbon.io)
  - [Bitters](http://bitters.bourbon.io)
- Optimize images

## Development instructions

### Needed on your computer:
- Node

### Run when starting:
- `npm install`

### Run when developing:
- `gulp`
- Now there is a build directory. Symlink the build directory to the wp-themes dir in your local Wordpress environment    
  For example `ln -s ~/dev/ganymede/build ~/dev/awesome.dev/wp-content/themes/ganymede`
