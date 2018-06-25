var gulp = require('gulp'),
settings = require('./settings'),
webpack = require('webpack'),
browserSync = require('browser-sync').create(),
postcss = require('gulp-postcss'),
rename = require('gulp-rename'),
rgba = require('postcss-hexrgba'),
autoprefixer = require('autoprefixer'),
cssvars = require('postcss-simple-vars'),
nested = require('postcss-nested'),
cleanCSS = require('gulp-clean-css'),
cssImport = require('postcss-import'),
mixins = require('postcss-mixins'),
colorFunctions = require('postcss-color-function');

gulp.task('styles', function() {
	return gulp.src(settings.themeLocation + 'app/styles/style.css')
		.pipe(postcss([cssImport, mixins, cssvars, nested, rgba, colorFunctions, autoprefixer({ browsers: ["> 0%"] })]))
		.pipe(cleanCSS({ compatibility: '*' }))
		.on('error', (error) => console.log(error.toString()))
		.pipe(gulp.dest(settings.themeLocation));
});

gulp.task('scripts', function(callback) {
	webpack(require('./webpack.config.js'), function(err, stats) {
		if (err) {
			console.log(err.toString());
		}

		console.log(stats.toString());
		callback();
	});
});

gulp.task('watch', function() {
	browserSync.init({
		notify: false,
		proxy: settings.urlToPreview,
		ghostMode: false
	});

	gulp.watch('./**/*.php', function() {
		browserSync.reload();
	});
	gulp.watch(settings.themeLocation + 'app/styles/**/*.css', ['waitForStyles']);
	gulp.watch([settings.themeLocation + 'app/scripts/modules/*.js', settings.themeLocation + 'assets/scripts/Scripts.js'], ['waitForScripts']);
});

gulp.task('waitForStyles', ['styles'], function() {
	return gulp.src(settings.themeLocation + 'style.css')
		.pipe(browserSync.stream());
});

gulp.task('waitForScripts', ['scripts'], function() {
	browserSync.reload();
});