var gulp = require('gulp');
var elixir = require('laravel-elixir');
var imagemin = require('gulp-imagemin');
var del = require('del');

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

// Path Config for deployments
var settings = {
	images: 'img/',
	fonts: 'fonts/',
	css: 'css/',
	less: 'less/',
	js: 'js/',
	assets: 'resources/assets/',
	vendor: 'vendor/',
	'public': 'public/'
};

// Path Config for deployments
var paths = {
	'dev': {
		'less': [
			'app.less',
		],
		'js': [
			settings.vendor + 'jquery/dist/jquery.js',
			settings.vendor + 'modernizr/modernizr.js',
			settings.vendor + 'bootstrap/dist/js/bootstrap.js',
		],
		'js_move': [],
		'fonts': [
			settings.assets + settings.vendor + 'fontawesome/fonts/*',
			settings.assets + settings.vendor + 'bootstrap/fonts/*',

			settings.assets + settings.fonts + '**/*'
		],
		'img': [
			settings.assets + settings.images + '**/*',
		]
	},
	'production': {
		'fonts': settings.public + settings.fonts,
		'img': settings.public + settings.images,
		'css': settings.public + settings.css,
		'js': settings.public + settings.js,
		'js_move': settings.public + settings.js
	}
};

elixir.extend('files', function (src, output)
{
	gulp.task('move', function ()
	{
		gulp.src(src).pipe(gulp.dest(output));
	});
	return this.queueTask('move');
});

gulp.task('clean', function(cb) {
	// You can use multiple globbing patterns as you would with `gulp.src`
	del(['build'], cb);
});

elixir.extend('images', function (src, output)
{
	// Copy all static images
	gulp.task('images', ['clean'], function() {
		return gulp.src(src)
			// Pass in options to the task
			.pipe(imagemin({optimizationLevel: 5}))
			.pipe(gulp.dest(output));
	});
	return this.queueTask('images');
});


elixir.extend('fonts', function (src, output)
{
	// Copy all static fonts
	gulp.task('fonts', ['clean'], function() {
		return gulp.src(src)
			.pipe(gulp.dest(output));
	});
	return this.queueTask('fonts');
});
elixir.extend('scriptsRaw', function (src, output)
{
	// Copy all static scripts
	gulp.task('scriptsRaw', ['clean'], function() {
		return gulp.src(src)
			.pipe(gulp.dest(output));
	});
	return this.queueTask('scriptsRaw');
});

// ------------------------------------------------

// Actual Elixir Configs
elixir(function (mix)
{
	mix
		.less(paths.dev.less)
		.scripts(paths.dev.js, settings.assets, paths.production.js)
		.version([
			paths.production.css + 'app.css',
			paths.production.js + 'all.js'
		])
		.fonts(paths.dev.fonts, paths.production.fonts) // move fonts
		.images(paths.dev.img, paths.production.img) // move images
		.scriptsRaw(paths.dev.js_move, paths.production.js_move) // move js files

	//.routes()
	//.events();
	//.phpUnit();
});
