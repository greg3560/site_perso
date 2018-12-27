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
    content = require('./content/content'),
    cnx = require('./content/cnx'),
    git = require('gulp-git'),
    robots = require('gulp-robots'),
    log = require('fancy-log'),
    favicons = require("favicons").stream,
    ftp = require( 'vinyl-ftp' );

sass.compiler = require('node-sass');

gulp.task('webpack', function () {
    return gulp.src('js/*.js')
        .pipe(webpack({
            mode: "development",
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
    return gulp.src(['dist/*', 'output/*'], {read: false})
        .pipe(clean());
});

gulp.task('img', function () {
    return gulp.src('img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/img'));
});

gulp.task("fonts", function() {
    return gulp.src("fonts/**/*.*")
        .pipe(gulp.dest('dist/fonts'));
});

gulp.task("files", function() {
    return gulp.src("files/**/*.*")
        .pipe(gulp.dest('dist/files'));
});

gulp.task('robots', function () {
    gulp.src('index.html')
        .pipe(robots({
            useragent: '*',
            allow: [],
            disallow: ['/libs/', '/certifications/']
        }))
        .pipe(gulp.dest('dist/'));
});

gulp.task("favicons", function () {
    return gulp.src("img/logo_gregory.png").pipe(favicons({
        appName: "Gregory Peigné",
        appShortName: "Greg",
        appDescription: "Site de présentation",
        developerName: "Gregory Peigne",
        developerURL: "http://www.gregorypeigne.fr/",
        path: "./",
        url: "http://www.gregorypeigne.fr/",
        display: "standalone",
        orientation: "portrait",
        scope: "/",
        version: 1.0,
        logging: false,
        html: "index.html",
        pipeHTML: false,
        replace: true
    }))
        .on("error", log)
        .pipe(gulp.dest("dist"));
});

gulp.task('dist', ['webpack', 'sass', 'twig', 'img', 'fonts', 'files', 'favicons', 'robots'], function () {
    gulp.src(['.htaccess', 'sitemap.xml']).pipe(gulp.dest('dist'));
    return gulp.src('*.html')
        .pipe(useref())
        .pipe(gulpif('*.js', uglify()))
        .pipe(gulpif('*.css', minifyCss()))
        .pipe(gulp.dest('dist'));
});

// Run git push
// remote is the remote repo
// branch is the remote branch to push to
gulp.task('push', function(){
    return git.push('origin', 'master', function (err) {
        if (err) throw err;
    });
});

gulp.task( 'deploy', function () {


    let globs = [
        'dist/**',
    ];

    cnx.log = log;
    let conn = ftp.create( cnx );

    // using base = '.' will transfer everything to /public_html correctly
    // turn off buffering in gulp.src for best performance

    return gulp.src( globs, { base: 'dist/', buffer: false, matchBase: true } )
        .pipe( conn.newer( '/public_html' ) ) // only upload newer files
        .pipe( conn.dest( '/public_html' ) );

} );

gulp.task('prod', ['clean'], () => {
    gulp.start('dist');
    gulp.src('dist/*')
        .pipe(zip('dist.zip'))
        .pipe(gulp.dest('.'));
});

gulp.task('watch', () => {
    livereload.listen();
    gulp.watch(['js/*.js', 'sass/*scss', 'templates/*.twig'], ['webpack', 'sass', 'twig']).on('change', function (e) {
        livereload.changed(e.path);
    });
});