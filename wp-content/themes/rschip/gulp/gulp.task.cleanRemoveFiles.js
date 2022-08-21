const gulp = require('gulp');
const del = require('del');

const path = require('../path.json');

gulp.task('removeHTML', function (cb) {
  return del(['dist/**/*.html']).then(() => {
    cb();
  })
});
gulp.task('removeJS', function (cb) {
  return del(['dist/**/*.js']).then(() => {
    cb();
  })
});


gulp.task('cleanRemoveFiles', gulp.series('removeHTML', 'removeJS'));