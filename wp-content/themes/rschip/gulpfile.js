const gulp = require('gulp');

// ===============================================
// Task clear
// ===============================================
const clear = require('./gulp/gulp.task.clear');
// ===============================================
// Task cleanRemoveFiles
// ===============================================
const cleanRemoveFiles = require('./gulp/gulp.task.cleanRemoveFiles');


// ===============================================
// Tasks static
// ===============================================
const static = require('./gulp/gulp.task.static');


// ===============================================
// Tasks html
// ===============================================
const pug2html = require('./gulp/gulp.task.pug2html');

// ===============================================
// Tasks styles
// ===============================================
const styles = require('./gulp/gulp.task.styles');

// ===============================================
// Tasks grid
// ===============================================
const grid = require('./gulp/gulp.task.smartgrid');


// ===============================================
// Tasks scripts
// ===============================================
const script = require('./gulp/gulp.task.scripts');

// ===============================================
// Tasks
// ===============================================

gulp.task('build', gulp.parallel('htmlBuild', 'styles', 'scripts'));

// ===============================================
// Tasks watch
// ===============================================
const watch = require('./gulp/gulp.task.watch');
const components = require('./gulp/gulp.create.components');