'use strict';

/*Require modules*/
var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var shell = require('gulp-shell');
var compass = require('gulp-compass');
var path = require('path');

var reload = browserSync.reload;

/* Paths */
var ROOT      = '../../../',
    BUILD    = ROOT + 'BUILD/',
    PUBLIC  = ROOT + 'PUBLIC/',

    SCALAR = 'scalar/',
    SUBTHEME = 'subtheme/',

    SASS      = 'assets/sass/',
    CSS    = 'assets/css/',
    SCRIPTS   = 'assets/scripts/',
    IMAGES    = 'assets/images/',
    FONTS     = 'assets/fonts/',
    TEMPLATES = 'templates/';

/*Tasks*/

//SHELL
gulp.task('cc', shell.task([
  'drush cc all'
]));


//COMPASS
gulp.task('compass', function() {

  return gulp.src(BUILD + SCALAR + SASS + '*.scss')
    .pipe(compass({
      css: PUBLIC + SCALAR + CSS,
      sass: BUILD + SCALAR + SASS
    }))
    .pipe(gulp.dest(PUBLIC + SCALAR + CSS));
});

/***************DEV**********************/

  /*Concat*/
var concat = require('gulp-concat');

gulp.task('scripts', function() {

  return gulp.src('./lib/*.js')

    .pipe(concat('all.js'))
    .pipe(gulp.dest('./dist/'));
});

/* JShint */
var jshint = require('gulp-jshint');

gulp.task('lint', function() {

  return gulp.src('./lib/*.js')

    .pipe(jshint())
    .pipe(jshint.reporter('YOUR_REPORTER_HERE'));
});

/* Uglify */
var uglify = require('gulp-uglify');

gulp.task('compress', function() {

  return gulp.src('lib/*.js')

    .pipe(uglify())
    .pipe(gulp.dest('dist'));
});


//SERVE
gulp.task('serve', ['compass'], function() {

  browserSync.init({
    proxy: 'local.drupalh'
  });
  //gulp
  // .watch(BUILD + SCALAR + STYLES + '**/*.scss',['css', 'kss']);
  //
  //gulp
  // .watch(BUILD + SCALAR + '**/*.jade',['jade']);
  //
  //gulp
  // .watch(BUILD + SCALAR + JS + '**/*.js',['js']);
  //
  //gulp
  // .watch(BUILD + SCALAR + IMAGES + '*.*',['images']);

  //gulp
  // .watch(BUILD + SCALAR + SASS + '*.scss', ['compass']);

  //gulp
  // .watch(BUILD + SCALAR + SASS + '*.scss').on('change', reload);

  gulp
    .watch(BUILD + SCALAR + TEMPLATES + '*.php')
    .on('change', reload);
});

/* Default Task */
gulp.task('default', ['serve', 'drush', 'compass']);