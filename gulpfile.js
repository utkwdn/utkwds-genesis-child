// Load plugins
var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var concat = require('gulp-concat');
var uglify = require('gulp-uglify-es').default;

// Set options
var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded',
};

// Set variables
var input        = './src/style.scss';
var editorcss    = './src/editor-style.scss';
var inputscripts = './src/js/';
var output       = './build/';

// // Compile Stylesheets
gulp.task('sass', function () {
  return gulp
    .src(input)
    .pipe(
      sass({
        includePaths: ['./node_modules', './src'],
      }).on('error', sass.logError)
    )
    .pipe(sass.sync({ outputStyle: 'expanded' }).on('error', sass.logError))
    .pipe(gulp.dest(output));
});
// // Compile Editor Stylesheets
gulp.task('editorsass', function () {
  return gulp.src(editorcss)
    .pipe(sass({
       includePaths: ["./node_modules","./src" ]
    }).on('error', sass.logError))
    .pipe(sass.sync({outputStyle: 'expanded'}).on('error', sass.logError))
    .pipe(gulp.dest(output));
 });

// Compile Scripts
gulp.task('scripts', function () {
  return gulp
    .src([
      './node_modules/bootstrap/dist/js/bootstrap.min.js',
      './src/js/utk.js',
    ])
    .pipe(concat('utk.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./build/js'));
});
// copy the build directoy
gulp.task('buildsrc', function () {
  return gulp.src('src/**').pipe(gulp.dest('build'));
});

// Create a distribution version
// ===============================================================

// Set dist variables
var inputcssdist     = './src/style.scss';
var inputeditordist  = './src/editor-style.scss';
var inputscriptsdist = './src/js/';
var outputcssdist    = './dist/genesis-child/';
var outputjsdist     = './dist/genesis-child/js';
// create the distributed javascipt file

gulp.task('distjs', function () {
  return gulp
    .src(['./src/js/utk.js'])
    .pipe(concat('utk.js'))
    .pipe(uglify())
    .pipe(gulp.dest(outputjsdist));
});
// create the distributed css file
gulp.task('distcss', function () {
  return gulp
    .src(inputcssdist)
    .pipe(
      sass({
        includePaths: ['./node_modules', './src'],
      }).on('error', sass.logError)
    )
    .pipe(sass.sync({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(gulp.dest(outputcssdist));
});
// create the distributed editor css file
gulp.task('editordistcss', function () {
  return gulp.src(inputeditordist)
    .pipe(sass({
       includePaths: ["./node_modules","./src" ]
    }).on('error', sass.logError))
    .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest(outputcssdist));
});


// copy the build directoy
gulp.task('distsrc', function () {
  return gulp.src('src/**').pipe(gulp.dest('dist/genesis-child'));
});


gulp.task('watch', function() {
  gulp.watch('./src/scss/**/*.scss', gulp.series('sass'))
  .on('change', function(event) {
    console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
  });  
  gulp.watch('./src/scss/**/*.scss', gulp.series('editorsass'))
  .on('change', function(event) {
    console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
  });
  gulp.watch('./src/js/*.js', gulp.series('scripts'))
  .on('change', function(event) {
    console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
  });
  gulp.watch('./src/**', gulp.series('buildsrc'))
  .on('change', function(event) {
    console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
  });
});

gulp.task('default', gulp.series('sass',  'editorsass','scripts','buildsrc','watch'));
gulp.task('build',   gulp.series('sass',  'editorsass','scripts','buildsrc'));
gulp.task('dist',    gulp.series('distcss', 'editordistcss','scripts','distsrc'));
