const gulp = require('gulp');

const browserSync = require('browser-sync').create();

const isDev = (process.argv.indexOf('--dev') !== -1);
const isProd = !isDev;
const isSync = (process.argv.indexOf('--sync') !== -1);
const path = require('../path.json');

gulp.task('watch', gulp.series('build', function _watch(done) {
	if (isSync) {
		browserSync.init({
			server: {
				baseDir: path.dist,
			}
			// tunnel: true
		});
	}
	gulp.watch(path.src + path.icons, gulp.series('sprite'));
	gulp.watch(path.src + path.images, gulp.series('images'));
	gulp.watch(path.src + path.fonts + '**/*', gulp.series('fonts'));
	gulp.watch(path.src + path.libs + '**/*', gulp.series('libs'));

	gulp.watch(path.src + path.html, gulp.series('html'));
	gulp.watch(path.src + path.pug, gulp.series('pug'));
	// gulp.watch(path.dist + '*.html', gulp.series('htmlProduction'));
	gulp.watch([path.dist + '**/*.html', '!dist/*.html']).on('change', browserSync.reload);

	gulp.watch(path.src + path.sass, gulp.series('stylesSass')).on('change', browserSync.reload);
	gulp.watch(path.src + 'components/**/*.sass', gulp.series('stylesComponents')).on('change', browserSync.reload);
	// gulp.watch(path.dist + 'css/px/**/*.css', gulp.series('stylesVp')).on('change', browserSync.reload);

	gulp.watch(path.src + path.js, gulp.series('scriptsAll')).on('change', browserSync.reload);
	gulp.watch(path.src + 'components/**/*.js', gulp.series('scriptsComponents')).on('change', browserSync.reload);

	gulp.watch('./configs/smartgrid.config.js', gulp.series('grid'));
	gulp.watch('./configs/breakPoints.json', gulp.series('pug','grid'));
	gulp.watch('./configs/postcss.config.js', gulp.series('styles'));

	done();
}));