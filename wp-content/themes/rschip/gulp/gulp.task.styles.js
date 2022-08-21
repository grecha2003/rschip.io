const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const gulpif = require('gulp-if');
const clean = require('gulp-clean');
const del = require('del');


const sourcemaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
const gcmq = require('gulp-group-css-media-queries');
const gemq = require('gulp-extract-media-queries');

const postcss = require('gulp-postcss');
const pxtoviewport = require('postcss-px-to-viewport');

const { root } = require('postcss');
const isDev = (process.argv.indexOf('--dev') !== -1);
const isProd = !isDev;
const isSync = (process.argv.indexOf('--sync') !== -1);

const path = require('../path.json');


const sassFiles = [
	path.src + 'sass/+(styles-sprites|base-styles|styles-calc|styles-percent).sass'
];

// gulp.task('stylesClean', function (done) {
// 	return gulp.src(path.dist + 'css/viewport/media/')
// 		.pipe(clean());
// 	// return del([path.dist + 'css/viewport/media/**/*'])
// 	// done();
// });
gulp.task('stylesComponents', function(){
	return gulp.src(path.src + 'components/**/*.sass')
		.pipe(concat('_allComponents.sass'))
		.pipe(gulp.dest(path.src + 'sass'))
});
gulp.task('stylesSass', function (done) {
	return gulp.src(sassFiles)
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(gcmq())
		.pipe(gulpif(isProd, cleanCSS({
			level: {
				2: {
				all: true, // sets all values to `false`
				}
			}
		})))
		// if use pxtoviewport simple
		// .pipe(postcss([pxtoviewport(settings.plugins['postcss-px-to-viewport'])]))
		.pipe(gulpif(isDev, sourcemaps.write()))
		.pipe(gulp.dest(path.dist + 'css'))
		// .pipe(gulp.dest(path.dist + 'css/px'))
		// .pipe(gemq())
		// .pipe(gulp.dest(path.dist + 'css/px/media'))
		.pipe(gulpif(isSync, browserSync.stream()));
});


gulp.task('stylesVp', function (done) {
	delete require.cache[require.resolve('../configs/breakPoints.json')];
	const settings = require('../configs/postcss.config.js');
	// const smartgrid = require('../configs/smartgrid.config.js');
	// const breakPoints = smartgrid.breakPoints;
	delete require.cache[require.resolve('../configs/breakPoints.json')];
	const _breakPoints = require('../configs/breakPoints.json');
	const breakPoints = _breakPoints.breakPoints;
	const viewportWidth = _breakPoints.viewportWidth;



	function _pxtoviewport(container) {
		return pxtoviewport(
			Object.assign(
				settings.plugins['postcss-px-to-viewport'],
				settings.plugins['postcss-px-to-viewport'].viewportWidth = container
			));
	}
	async function _stylesVp() {
		gulp.src(path.dist + 'css/px/media/styles-calc.css')
			.pipe(postcss([_pxtoviewport(viewportWidth)]))
			.pipe(concat('mobileFirst-' + viewportWidth + 'px.css'))
			.pipe(gulp.dest(path.dist + 'css/viewport'))

		for (let key in breakPoints) {
			let breakPoint = breakPoints[key].width.substr(0, breakPoints[key].width.search('px'))
			console.log(breakPoint);
			gulp.src([path.dist + 'css/px/media/styles-calc.css', path.dist + 'css/px/media/screen-and-min-width-' + breakPoint + 'px.css'], { allowEmpty: true })
				.pipe(postcss([_pxtoviewport(breakPoint)]))
				.pipe(concat(breakPoint + 'px.css'))
				.pipe(gulp.dest(path.dist + 'css/viewport/media/' + breakPoint))
		}
	}
	return _stylesVp();
});

gulp.task('styles', gulp.series('stylesComponents', 'stylesSass'));