var gulp = require('gulp');
var less = require('gulp-less');
var htmlmin = require('gulp-htmlmin');
var rename = require("gulp-rename");

var paths = {
  less: ['./less/*.less'],
  html: ['./index-src.html']
};

// Default task to run when invoking gulp.
gulp.task('default', ['less', 'minify']);

// Minify and concatenate all CSS files into main-min.css
gulp.task('less', function() {
  gulp.src(paths.less)
    .pipe(less({compress: true}))
    .pipe(gulp.dest('./css/'))
});

// Rerun the task when a file changes
gulp.task('watch', function () {
  gulp.watch(paths.less, ['less']);
  gulp.watch(paths.html, ['minify']);
});

gulp.task('minify', function() {
  return gulp.src(paths.html)
    .pipe(htmlmin({
        collapseWhitespace: true,
        removeComments: true,
      }))
    .pipe(rename(function (path) {
        path.basename = path.basename.replace('-src', '');
      }))
    .pipe(gulp.dest('.'))
});