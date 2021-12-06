const { dest, src, watch } = require("gulp");
//const gulp = require('gulp');
const sass = require("gulp-dart-sass");
const prefix = require("gulp-autoprefixer");
const csso = require("gulp-csso");
const sourcemaps = require("gulp-sourcemaps");
const browserSync = require("browser-sync").create();
const notify = require('gulp-notify');
const connect = require('gulp-connect-php');
var reload = browserSync.reload;

function scss() {
    return src("src/scss/mdb.free.scss")
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(prefix())
        .pipe(csso())
        .pipe(sourcemaps.write("."))
        .pipe(dest("css/"))
        .pipe(browserSync.stream())
        .pipe(browserSync.reload())
    //.pipe(notify({ message: 'Ricompilazione SCSS fatta' }));
}

function custom() {
    return src("src/scss/custom/inc/**")
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(prefix())
        .pipe(csso())
        .pipe(sourcemaps.write("."))
        .pipe(dest("css/inc/"))
    //.pipe(notify({ message: 'Ricompilazione SCSS fatta' }));
}



function prod() {
    return src("css/*.css")
        .pipe(prefix())
        .pipe(csso())
        .pipe(dest("dist/css/"))
}

exports.sass = scss;
exports.custom = custom;


exports.default = function () {
    browserSync.init({
        proxy: "localhost:8081",
        port: 80,
        watch: true,
    });

    watch("src/scss/**/*.scss", scss);
    watch("src/scss/custom/inc/*.scss", custom);
    watch("**/*.php").on('change', browserSync.reload);
}

/**

task('connect-sync', function() {
   return connect.server({}, function() {
      browserSync.init({
         proxy: 'localhost:8081',
         watch: true,
         port: 80,
      });
   });
});

*/