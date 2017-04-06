const   gulp    = require('gulp'),
        sass    = require('gulp-sass'),
        cssnano = require('gulp-cssnano');
        babel   = require('gulp-babel');

/**
 * SASS
 */
gulp.task('sass',()=>{
    return gulp.src('./dev/scss/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(cssnano({
            autoprefixer:{
                add: true,
                browsers: 'last 2 versions'
            },
        }))
        .pipe(gulp.dest('./assets/css'))
});

/**
 * JAVASCRIP
 */
gulp.task('babel',()=>{
   return gulp.src('./dev/babel/**/*.js')
       .pipe(babel({
           presets: ['es2015']
       }))
       .pipe(gulp.dest('./assets/js/'))
});
/**
 * SERVER
 */
gulp.task("watch",()=>{
    gulp.watch('./dev/scss/**/*.scss',['sass']);
    gulp.watch('./dev/pug/**/*.pug',['pug']);
    gulp.watch('./dev/babel/**/*.js',['babel']);
});

/**
 * Task of Default
 */
gulp.task('default',()=>{
    gulp.start('watch');
});