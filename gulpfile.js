var gulp = require('gulp');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');
var rename = require("gulp-rename");
var notify = require("gulp-notify")
var browserSync = require('browser-sync');
var php = require('gulp-connect-php');

var reload = browserSync.reload;

var input = './sass/*';
var output = './styles/';

gulp.task('sass', function () {
  return gulp
    .src(input)
    .pipe(sass())
    .on('error', function (err) {
        notify.onError({
            title: 'Error',
            message: '<%= error.message %>',
        })(err);
        this.emit('end');
    })
    .pipe(prefix("last 8 versions", "> 1%", "ie 8", "ie 7"))
    .pipe(gulp.dest(output))
    .pipe(rename({suffix: '.min'}))
    .pipe(cssmin())
    .pipe(gulp.dest(output))
    .pipe(reload({stream:true}));
});

/* Reload task */
gulp.task('bs-reload', function () {
    browserSync.reload();
});

/* Prepare Browser-sync for localhost */
gulp.task('browser-sync', function() {
    browserSync.init(['styles/*.css', 'js/*.js', '*.php'], {
        browser: ["google chrome"],
        proxy: 'localhost:8010',
        port: 3000,
        open: true,
        notify: false
    });
});

gulp.task('php', function() {
    php.server({port: 8010, keepalive: true, base: './'});
});

gulp.task('watch', function() {
  return gulp
    .watch(input, ['sass'])
});

gulp.task('default', ['php', 'sass', 'watch', 'browser-sync']);