var gulp = require('gulp');
var elixir = require('laravel-elixir');
var imagemin = require('gulp-imagemin');
var del = require('del');
var autoprefixer = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var notify = require('gulp-notify');
var cache = require('gulp-cache');
var replace = require('gulp-replace');

/*
 |----------------------------------------------------------------
 | Have a Drink!
 |----------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic
 | Gulp tasks for your Laravel application. Elixir supports
 | several common CSS, JavaScript and even testing tools!
 |
 */

// -----------------------------------------------

/**
 * Path Settings
 */
var settings = {
	images: 'img/',
	fonts: 'fonts/',
	css: 'css/',
	js: 'js/',
	"public": 'public/dist/',
	"private": 'resources/assets/',
	"bower": 'resources/assets/vendor/'
};

/**
 * Path Object
 */
var paths = {
	'dev': {
		'less': [
			'app.less',
		],
		'css': [
			settings.private + settings.css + '**/*.css',
		],
		'js': [
			settings.bower + 'jquery/dist/jquery.js',
			settings.bower + 'modernizr/modernizr.js',
			settings.bower + 'bootstrap/dist/js/bootstrap.js',
			settings.bower + 'highlightjs/highlight.pack.js',
			// settings.private + settings.js + '**/*.js', // Need to fix bower includes here :(
		],
		'fonts': [
			settings.bower + 'fontawesome/fonts/*',
			settings.bower + 'bootstrap/fonts/*',
			settings.private + settings.fonts + '**/*'
		],
		'img': [
			settings.private + settings.images + '**/*',
		]
	},
	'production': {
		'fonts': settings.public + settings.fonts,
		'img': settings.public + settings.images,
		'css': settings.public + settings.css,
		'js': settings.public + settings.js
	}
};

/**
 *
 */
elixir.extend('scripts_new', function (src, output)  {
	gulp.task('scripts_new', function() {
		return gulp.src(src)
			//.pipe(jshint('.jshintrc'))
			//.pipe(jshint.reporter('default'))
			.pipe(concat('main.js'))
			.pipe(gulp.dest(output))
			.pipe(rename({suffix: '.min'}))
			.pipe(uglify())
			.pipe(gulp.dest(output))
			;
	});
	return this.queueTask('scripts_new');
});

/**
 *
 */
elixir.extend('styles_new', function (src, output) {
	gulp.task('styles_new', function() {
		return gulp.src(src)
			.pipe(autoprefixer('last 2 version', 'safari 5', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
			.pipe(gulp.dest(output))
			.pipe(concat('main.css'))
			.pipe(rename({suffix: '.min'}))
			.pipe(minifycss())
			.pipe(gulp.dest(output))
			;
	});
	return this.queueTask('styles_new');
});

/**
 *
 */
elixir.extend('images_new', function (src, output) {
	// Copy all static images
	gulp.task('images_new', function() {
		return gulp.src(src)
			.pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
			.pipe(gulp.dest(output))
			;
	});
	return this.queueTask('images_new');
});

/**
 *
 */
elixir.extend('fonts', function (src, output) {
	// Copy all static fonts
	gulp.task('fonts', function() {
		return gulp.src(src)
			.pipe(gulp.dest(output))
			;
	});
	return this.queueTask('fonts');
});

/**
 *
 */
elixir.extend('clean', function (src, output) {
	gulp.task('clean', function() {
		del([paths.production.css, paths.production.js, paths.production.img, paths.production.fonts], src)
	});
	return this.queueTask('clean');
});

/**
 *
 */
elixir(function (mix) {
	mix
		.clean()
		.less(paths.dev.less, paths.production.css)
		.styles_new(paths.dev.css, paths.production.css)
		.scripts_new(paths.dev.js, paths.production.js)
		.fonts(paths.dev.fonts, paths.production.fonts) // move fonts
		.images_new(paths.dev.img, paths.production.img) // move images
	;
});
