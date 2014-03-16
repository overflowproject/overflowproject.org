var gulp = require('gulp');
var less = require('gulp-less');

var paths = {
  less: ['./less/*.less']
};

// Default task to run when invoking gulp.
gulp.task('default', ['less']);

// Minify and concatenate all CSS files into main-min.css
gulp.task('less', function() {
  gulp.src(paths.less)
    .pipe(less({compress: true}))
    .pipe(gulp.dest('./css/'))
});

// Rerun the task when a file changes
gulp.task('watch', function () {
  gulp.watch(paths.less, ['less']);
});
