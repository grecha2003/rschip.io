const gulp = require('gulp');
const browserSync = require('browser-sync').create();
const gulpif = require('gulp-if');

const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const sourcemaps = require('gulp-sourcemaps');
const notify = require('gulp-notify');

const isDev = (process.argv.indexOf('--dev') !== -1);
const isProd = !isDev;
const isSync = (process.argv.indexOf('--sync') !== -1);

const path = require('../path.json');

const jsFiles = [
    path.src + path.js
];

gulp.task('scriptsComponents', function(){
	return gulp.src(path.src + 'components/**/*.js')
		// .pipe(concat('_allComponents.js'))
		.pipe(gulp.dest(path.dist + 'js'))
});
gulp.task('scriptsAll', function () {
    return gulp.src(jsFiles)
        .pipe(gulpif(isDev, sourcemaps.init()))
        // .pipe(concat('all.js')) 
        // .pipe(concat('all.min.js'))
        // .pipe(uglify({
        // 	toplevel: false//жесткое сжатие js
        // }))
        // .pipe(gulpif(isDev, sourcemaps.write()))
        .pipe(gulp.dest(path.dist + 'js'))
        .pipe(gulpif(isSync, browserSync.stream()))

});
gulp.task('scripts', gulp.series('scriptsComponents', 'scriptsAll'));