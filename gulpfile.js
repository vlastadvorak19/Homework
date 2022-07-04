

/* Get plugins */
const gulp = require('gulp');
const browserSync = require('browser-sync');
const plumber = require('gulp-plumber');
const fileInclude = require('gulp-file-include');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const del = require('del');
const webpack = require('webpack-stream');
const php = require('gulp-connect-php');

/* Primary tasks */
gulp.task('default', (done) => {
    gulp.series('serve')(done)
});

/* Image task */
gulp.task('images', () => {
    return gulp.src(['./static/*'])
        .pipe(gulp.dest('./build/assets/img/'));
});

gulp.task('serve', (done) => {
    gulp.series('clean', gulp.parallel('php', 'sass', 'js', 'images'), 'server')(done)
});

/* Html task */
gulp.task('php', () => {
    return gulp.src(['./src/partials/*.php', '!./src/partials/_includes/**/*'])
        .pipe(plumber())
        .pipe(fileInclude({
            prefix: '@',
            basepath: '@file'
        }))
        .pipe(gulp.dest('./build/'))
});

/* Sass task */
gulp.task('sass', () => {
    return gulp.src('./src/scss/main.scss')
        .pipe(sass({
            "includePaths": "node_modules"
        }))
        .pipe(autoprefixer())
        .pipe(gulp.dest('./build/assets/css/'))
});





/* JS (webpack) task */
gulp.task('js', () => {
    return gulp.src(['./src/js/**/*'])
        .pipe(webpack(require('./webpack.config.js')))
        .pipe(gulp.dest('./build/assets/js'));
});

/* Watcher */
gulp.task('watch', () => {
    global.isWatching = true;

    gulp.watch("./src/scss/**/*.scss", gulp.series('sass'));
    gulp.watch("./src/partials/**/*.php", gulp.series('php'));
    gulp.watch("./src/js/**/*.*", gulp.series('js'));
    gulp.watch("./config.json", gulp.parallel('php', 'js'));
});

/* FS tasks */
gulp.task('clean', () => {
    return del(['./build/**/*'], { dot: true });
});

/* Run PHP Server */
gulp.task('server', function(){
    php.server({base:'./build/', port:8010, keepalive:true});
});