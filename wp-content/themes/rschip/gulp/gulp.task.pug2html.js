const gulp = require('gulp');
const gulpif = require('gulp-if');
const browserSync = require('browser-sync').create();

const isDev = (process.argv.indexOf('--dev') !== -1);
const isProd = !isDev;
const isSync = (process.argv.indexOf('--sync') !== -1);

const path = require('../path.json');

const htmlFiles = [
    path.src + path.html
];
const pugFiles = [
    './src/pages/**/*.pug',
    './src/pug/**/*.pug',
    '!./src/pug/**/content.pug',
    '!./src/pug/modules/**/*.pug',
    '!./src/pug/blocks/**/*.pug',
    '!./src/pug/templates/**/*.pug',
    '!./src/pug/common/**/*.pug',
    '!./src/pug/includes/**/*.pug',
    '!./src/pug/meta/**/*.pug',
    '!./src/pug/mixins/**/*.pug',
    '!./src/pug/variables/**/*.pug',
    '!./src/pug/data/**/*.pug',
];

const pug = require('gulp-pug');
const pugLinter = require('gulp-pug-linter');
const plumber = require('gulp-plumber');
const htmlValidator = require('gulp-w3c-html-validator');
const htmlBemValidator = require('gulp-html-bem-validator');

const data = require('gulp-data');
const fs = require('fs');

const json = JSON.parse(fs.readFileSync('configs/breakPoints.json'));

let objBP = {
    "viewportWidth": json.viewportWidth,
    "breakPoints": {}
};

gulp.task('html', function () {
    return gulp.src(htmlFiles)
        .pipe(gulp.dest(path.dist))
        .pipe(browserSync.stream());
})

gulp.task('pug', function () {
    async function _pug() {
        delete require.cache[require.resolve('../configs/breakPoints.json')];
        gulp.src(pugFiles)
            .pipe(plumber())
            .pipe(pugLinter({ reporter: 'default' }))
            // ex 1
            // .pipe(pug({ pretty: '\t' }))

            // ex 2
            // .pipe(pug({
            //     data: {
            //         title: 'Our Awesome Website',
            //         links: [
            //             'Link 1',
            //             'Link 2',
            //             'Link 3'
            //         ],
            //         message: 'Hello World!'
            //     }
            // }))

            // ex 3

            .pipe(data(function (file) {
                return JSON.parse(fs.readFileSync('data/data.json'))
            }))

            .pipe(data(function (file) {
                for (let key in json.breakPoints) {
                    let breakPoint = json.breakPoints[key].width.substr(0, json.breakPoints[key].width.search('px'));

                    let br = {};
                    br[key] = { width: breakPoint };
                    Object.assign(objBP.breakPoints, br);
                    // let allCarsObj = {};
                    // for (let value in allCars) {
                    // 	if (allCarsObj.hasOwnProperty(allCars[value].brand)) {
                    // 		Object.assign(allCarsObj[allCars[value].brand], { [allCars[value].model]: allCars[value] });
                    // 	} else {
                    // 		Object.assign(allCarsObj, { [allCars[value].brand]: { [allCars[value].model]: allCars[value] } })
                    // 	}
                    // }
                }
                return objBP;
            }))
            .pipe(pug())

            // .pipe(htmlValidator())
            // .pipe(htmlBemValidator())
            .pipe(gulp.dest(path.dist))
            .pipe(browserSync.stream());
    }
    return _pug();
});

gulp.task('htmlProduction', function () {
    return gulp.src(path.dist + '*.html')
        .pipe(gulp.dest(path.root))
        .pipe(browserSync.stream());
});

gulp.task('htmlBuild', gulp.series('html', 'pug'));