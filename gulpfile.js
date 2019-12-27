const gulp      = require('gulp');
const config    = require('./gulp-config.json');
const configRJ  = require(config.redshopJoomla + '/gulp-config.json');

console.log(config.redshopJoomla + '/gulp-config.json');
gulp.task('copy:redshop-base', function(cb){
    gulp.src('./src/**')
        .pipe(gulp.dest(config.redshopJoomla + '/vendor/' + config.packageName + '/src'));
    cb();
});

gulp.task('copy:redshop-joomla', function(cb){
    gulp.src('./src/**')
        .pipe(gulp.dest(configRJ.wwwDir + '/vendor/' + config.packageName + '/src'));
    cb();
});

gulp.task('copy', gulp.series('copy:redshop-base', 'copy:redshop-joomla'));

