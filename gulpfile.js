//const { dest, src, watch } = require("gulp");
const gulp = require('gulp');
const sass = require("gulp-dart-sass");
const prefix = require("gulp-autoprefixer");
const csso = require("gulp-csso");
const sourcemaps = require("gulp-sourcemaps");
const browserSync = require("browser-sync").create();
const notify = require('gulp-notify');
const connect  = require('gulp-connect-php');
var reload = browserSync.reload;

function scss() {
    return gulp.src("src/scss/mdb.free.scss")
        gulp.pipe(sourcemaps.init())
        gulp.pipe(sass().on('error', sass.logError))
        gulp.pipe(prefix())
        gulp.pipe(csso())
        gulp.pipe(sourcemaps.write("."))
        gulp.pipe(gulp.dest("css/"))
        gulp.pipe(browserSync.stream())
        gulp.pipe(browserSync.reload())
    //.pipe(notify({ message: 'Ricompilazione SCSS fatta' }));
}

function custom() {
    return gulp.src("src/scss/custom/inc/**")
        gulp.pipe(sourcemaps.init())
        gulp.pipe(sass().on('error', sass.logError))
        gulp.pipe(prefix())
        gulp.pipe(csso())
        gulp.pipe(sourcemaps.write("."))
        gulp.pipe(gulp.dest("css/inc/"))
    //.pipe(notify({ message: 'Ricompilazione SCSS fatta' }));
}



function prod() {
    return gulp.src("css/*.css")
        gulp.pipe(prefix())
        gulp.pipe(csso())
        gulp.pipe(gulp.dest("dist/css/"))
}

exports.sass = scss;
exports.custom = custom;


exports.default = function () {
        browserSync.init({
            proxy: "localhost:8081",
            port: 80,
            watch: true,
        });
    gulp.watch("**/*.php").on('change', browserSync.reload);
    gulp.watch("src/scss/**//*.scss", scss);
    gulp.watch("src/scss/custom/inc/*.scss", custom);
}

/**

gulp.task('connect-sync', function() {
   return connect.server({}, function() {
      browserSync.init({
         proxy: 'localhost:8081',
         watch: true,
         port: 80,
      });
   });
});

*/