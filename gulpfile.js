'use strict';

let gulp = require('gulp'),
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
    content = require('./js/content'),
    git = require('gulp-git');

sass.compiler = require('node-sass');

gulp.task('webpack', function () {
    return gulp.src('js/*.js')
        .pipe(webpack({
            output: {
                filename: 'main.js',
            },
        }))
        .pipe(gulp.dest('output/'));
});

gulp.task('sass', function () {
    return gulp.src('./sass/materialize.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task('twig', function () {
    return gulp.src('./templates/index.twig')
        .pipe(twig({
            data: content
        }))
        .pipe(gulp.dest('./'));
});

gulp.task('default', ['webpack', 'sass', 'twig'], () => {

});

gulp.task('clean', function () {
    gulp.src('dist', {read: false})
        .pipe(clean());
    gulp.src('output', {read: false})
        .pipe(clean());
});

gulp.task('img', ['clean'], function () {
    return gulp.src('img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/img'));
});

gulp.task("fonts", function() {
    return gulp.src("fonts/**/*.*")
        .pipe(gulp.dest('dist/fonts'));
});

gulp.task('dist', ['webpack', 'sass', 'twig', 'img', 'fonts'], function () {
    gulp.src('*.html')
        .pipe(useref())
        .pipe(gulpif('*.js', uglify()))
        .pipe(gulpif('*.css', minifyCss()))
        .pipe(gulp.dest('dist'));
});

// Run git push
// remote is the remote repo
// branch is the remote branch to push to
gulp.task('push', function(){
    git.push('origin', 'master', function (err) {
        if (err) throw err;
    });
});

gulp.task('prod', ['dist', 'push'], () => {
    return gulp.src('dist/*')
        .pipe(zip('dist.zip'))
        .pipe(gulp.dest('.'));
});

gulp.task('watch', () => {
    livereload.listen();
    gulp.watch(['js/*.js', 'sass/*scss', 'templates/*.twig'], ['webpack', 'sass', 'twig']).on('change', function (e) {
        livereload.changed(e.path);
    });
});