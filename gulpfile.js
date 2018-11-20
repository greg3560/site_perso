'use strict';

var gulp = require('gulp'),
    sass = require('gulp-sass'),
    livereload = require('gulp-livereload'),
    useref = require('gulp-useref'),
    gulpif = require('gulp-if'),
    uglify = require('gulp-uglify-es').default,
    minifyCss = require('gulp-clean-css'),
    imagemin = require('gulp-imagemin'),
    clean = require('gulp-clean'),
    zip = require('gulp-zip');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
    return gulp.src('./sass/input.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task('clean', function () {
    return gulp.src('dist', {read: false})
        .pipe(clean());
});

gulp.task('img', ['clean'], function () {
    return gulp.src('img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/img'));
});

gulp.task('dist', ['sass', 'img'], function() {
    return gulp.src('*.html')
        .pipe(useref())
        .pipe(gulpif('*.js', uglify()))
        .pipe(gulpif('*.css', minifyCss()))
        .pipe(gulp.dest('dist'));
});

gulp.task('default', ['dist'], function() {
    return gulp.src('dist/*')
        .pipe(zip('dist.zip'))
        .pipe(gulp.dest('.'));
});

gulp.task('watch', function () {
    livereload.listen();
    gulp.watch('sass/input.scss', 'sass/_settings.scss', 'sass/_variables.scss', ['sass']);
    gulp.watch(['*.html', '/sass/*.scss', 'js/*.js']).on('change', function(e) {
        livereload.changed(e.path);
    });
});