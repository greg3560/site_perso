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
    webpack = require('webpack-stream');

sass.compiler = require('node-sass');

gulp.task('twig', function () {
    return gulp.src('./templates/index.twig')
        .pipe(twig({
            data: {
                title: 'Grégory Peigné',
                age: '37ans',
                phone: '06.95.81.36.65',
                mail: 'contact@gregorypeigne.fr',
                street: '12 grande rue',
                zipCode: '95470',
                city: 'Survilliers',
                country: 'FRANCE',
                subTitle: 'Développeur web - React.js - Symfony - Javascript - Node.js - Bootstrap - Materialize ...',
                intro: 'Je suis Grégory Peigné, développeur web depuis 2012. J’ai débuté en autodidacte sur la plateforme openclassrooms. Ensuite j’ai intégré L’INFA pour une formation de 3 mois pour valider mon expérience autodidacte. Puis j’ai obtenu une licence de <strong>chef de projet digital</strong> à Institut F2i à Paris.',
                skills: [
                    'Fast',
                    'Flexible',
                    'Secure'
                ]
            }
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