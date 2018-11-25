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
    zip = require('gulp-zip'),
    twig = require('gulp-twig'),
    webpack = require('webpack-stream'),
    content = require('./js/content');

sass.compiler = require('node-sass');

gulp.task('twig', function () {
    return gulp.src('./templates/index.twig')
        .pipe(twig({
            data: content
        }))
        .pipe(gulp.dest('./'));
});

gulp.task('babel', function() {
    return gulp.src('js/*.js')
        .pipe(webpack())
        .pipe(gulp.dest('output/'));
});


gulp.task('sass', function () {
    return gulp.src('./sass/materialize.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task('clean', function () {
    gulp.src('dist', {read: false})
        .pipe(clean());
    return gulp.src('output', {read: false})
        .pipe(clean());
});

gulp.task('img', ['clean'], function () {
    return gulp.src('img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/img'));
});

gulp.task('dist', ['babel', 'sass', 'img', 'twig'], function() {
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
    gulp.watch('sass/*scss', ['sass']);
    gulp.watch(['*.html', 'templates/*.twig', '/sass/*.scss', 'js/*.js', 'css/style.css']).on('change', function(e) {
        livereload.changed(e.path);
    });
});