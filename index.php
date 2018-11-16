<?php
# site/plugins/dev/index.php

Kirby::plugin('julien-gargot/dev', [
  'snippets' => [
    'dev' => __DIR__ . '/snippets/dev.php'
  ]
]);

// Gulp task.
/* // If you need to recomplice the CSS from Sass.
gulp.task('plugin-dev', function (done) {
  return gulp.src( 'site/plugins/dev/assets/css/dev.scss')
    .pipe(sass())
    .pipe(gulp.dest('site/plugins/dev/assets/css/'));
});
*/
/* // If you need to recomplice the CSS from Less.
gulp.task('plugin-dev', function (done) {
  return gulp.src( 'site/plugins/dev/assets/css/dev.less')
    .pipe(less())
    .pipe(gulp.dest('site/plugins/dev/assets/css/'));
});
*/
