const gulp = require('gulp');
const del = require('del');

const spritesmith = require('gulp.spritesmith');
const svgSprite = require('gulp-svg-sprite');

const webp = require('gulp-webp');
const imagemin = require('gulp-imagemin');
const imageminMozjpeg = require('imagemin-mozjpeg');


const path = require('../path.json');


// ===============================================
// Tasks sprite
// ===============================================

gulp.task('sprite', function () {

	const srcIconPathPng = path.src + path.iconsPNG + '**/*.png';
	const srcIconPathSvg = path.src + path.iconsSVG + '**/*.svg';

	const spritesmithOptions = {
		png: {
			srcIconPath: srcIconPathPng,
			imgName: 'spritePNG.png',
			imgPath: '../assets/icons/png/spritePNG.png',
			cssName: 'spritePNG.sass',
			pathDest: path.iconsPNG,
			format: 'png'
		},
		webp: {
			srcIconPath: srcIconPathPng,
			imgName: 'spriteWEBP.webp',
			imgPath: '../assets/icons/webp/spriteWEBP.webp',
			cssName: 'spriteWEBP.sass',
			pathDest: path.iconsWEBP,
			format: 'webp'
		}
	}

	const svgSpriteConfig = {
		shape: {
			// dimension: {
			// 	maxWidth: 32,
			// 	maxHeight: 32
			// },
			spacing: {
				padding: 10
			}
		},
		mode: {
			view: {
				sprite: "../assets/icons/svg/spriteSVG.svg",
				dest: './',
				prefix: ".svg-",
				dimensions: "-box",
				bust: false,
				render: {
					scss: true
				}
			}
		}
	};
	async function _spriteSVG() {
		gulp.src('./src/assets/icons/svg/**/*.svg')
			.pipe(svgSprite(svgSpriteConfig))
			.pipe(gulp.dest(path.dist + 'assets'))
			.pipe(gulp.dest(path.src + path.sprite + 'svg'));
	}



	async function _spritePNG() {

		for (let key in spritesmithOptions) {
			let option = spritesmithOptions[key];

			gulp.src(option.srcIconPath)
				.pipe(spritesmith({
					imgName: option.imgName,
					imgPath: option.imgPath,
					cssName: option.cssName,
					cssVarMap: function (sprite) {
						sprite.name = `${sprite.name}-${option.format}`;
					}
				}))

				.pipe(gulp.dest(path.dist + option.pathDest))
				.pipe(gulp.dest(path.src + path.sprite + option.format))
		}


	}

	async function _spriteWebp() {
		return setTimeout(() => {
			gulp.src(path.src + path.sprite + 'webp/spriteWEBP.webp')
				.pipe(webp())
				.pipe(gulp.dest(path.dist + path.iconsWEBP))
				.pipe(gulp.dest(path.src + path.sprite + 'webp'))
		}, 2000);

	}

	
	return _spriteSVG(), _spritePNG(), _spriteWebp();
});
// ===============================================
// Tasks images
// ===============================================
gulp.task('images', function (done) {

	async function _images() {
		try {
			let promise = new Promise((resolve, reject) => {
				delete require.cache[require.resolve('../configs/imagemin.config.js')];
				const settings = require('../configs/imagemin.config.js');
				resolve(
					gulp.src(path.src + path.images + '**/*')

						// if use simple  // .pipe(imagemin())

						// fix me condition if если картинка уже минифицирована
						// .pipe(gulpif(folder.dist + path.images , imagemin()))
						// use Adv
						// .pipe(imagemin([
						// 	imageminMozjpeg(settings.mozjpeg),
						// 	imagemin.gifsicle(settings.gifsicle),
						// 	imagemin.optipng(settings.optipng),
						// 	imagemin.svgo(settings.svgo)
						// ], {
						// 	verbose: true // Enabling this will log info on every image passed to gulp-imagemin: // Default: false 
						// }, {
						// 	silent: false // Don't log the number of images that have been minified. // Default: false 
						// })
						// )
						.pipe(gulp.dest(path.dist + path.images)),
					gulp.src([path.src + path.images + '/**/*.{jpg,jpeg,png}'])
						.pipe(webp())
						.pipe(gulp.dest(path.dist + path.images + 'webp'))
				);

			}).then(function (result) {
			});
		} catch (err) {
			console.log(err);
		}
	}

	done();
	return _images();
});
// ===============================================
// Tasks fonts
// ===============================================
gulp.task('fonts', function (done) {
	return gulp.src(path.src + path.fonts + '**/*')
		.pipe(gulp.dest(path.dist + path.fonts))

});
// ===============================================
// Tasks libs
// ===============================================
gulp.task('libs', function (done) {
	return gulp.src(path.src + path.libs + '**/*')
		.pipe(gulp.dest(path.dist + path.libs))

});
// ===============================================
// Tasks clearTrashs
// ===============================================
gulp.task('clearTrash', function (done) {
	del([
		path.src + path.sprite + 'svg/icons',
		path.src + 'sass/**/*.png',
		path.src + 'sass/**/*.webp',
		path.src + 'sass/**/*.svg',
		path.dist + '**/*.sass',
		path.dist + '**/*.scss',
	])
	done();
});
