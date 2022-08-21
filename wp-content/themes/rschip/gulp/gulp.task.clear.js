const gulp = require('gulp');
const del = require('del');

const path = require('../path.json');

gulp.task('clear', function (done) {
	del([path.dist, path.root + 'index.html', path.src + path.sprite])
	done();
});