# Ganymede — A Wordpress Theme

## Tools for development
- [Sass](http://sass-lang.com) parser with:
  - [Bourbon](http://bourbon.io)
  - [Neat](http://neat.bourbon.io)
- Optimize images

## Development instructions

### Needed on your computer:
- [Node](https://nodejs.org)
- A [wp-dev-box](https://github.com/reinier/wp-dev-box) on the same level as this repository. Read about my development workflow here: [How I develop Wordpress themes](https://gist.github.com/reinier/c806c5ec8ad3e6906e66)

### Run when starting:
- `npm install`

### Run when developing:
- `gulp`    
or
- `gulp work` when you want to open Sublime and Google Chrome

### Run when releasing a new version of theme:
- `gulp release`    
  This will build the theme to the `dist` branch. You have to push this branch manually.
