//npm i gulp gulp-imagemin gulp-newer gulp-size gulp-sass gulp-concat gulp-merge-media-queries gulp-cssnano autoprefixer gulp-uglify gulp-rename del gulp-sourcemaps gulp-postcss

const
    gulp = require('gulp'),
    imagemin = require('gulp-imagemin'),
    newer = require('gulp-newer'),
    size = require('gulp-size'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    mmq = require('gulp-merge-media-queries'),
    postcss = require('gulp-postcss'),
    autoprefixer = require('autoprefixer'),
    uglify = require('gulp-uglify-es').default,
    rename = require('gulp-rename'),
    del = require('del'),
    sourcemaps = require('gulp-sourcemaps');



var browserSync = require('browser-sync').create();
var theme_dir = 'wp-content/themes/aa-base-theme/';


// personally written JS
var jsFiles = [
    theme_dir + 'assets/js/jquery/jquery.js',
    theme_dir + 'assets/js/plugins/**/*.js',
    theme_dir + 'assets/js/*.js',
]

// personally written CSS
var scssFiles = [
    theme_dir + 'assets/js/plugins/**/*.css',
    theme_dir + 'assets/scss/**/*.scss'
]

var atfScssFiles = [
    theme_dir + 'assets/atf/scss/**/*.scss'
]

var watchScssFiles = [
    theme_dir + 'assets/js/plugins/**/*.css',
    theme_dir + 'assets/scss/**/*.scss',
    theme_dir + 'assets/atf/scss/**/*.scss'
];

// refers to my build directory and or files to
// to delete
var toDelete = [
    theme_dir + 'build/**/*',
]

// TASKS BEGIN

// deletes files
const cleanUp = () => {
    del(toDelete);
};
gulp.task('clean', cleanUp);


/**************** images task ****************/

const imgConfig = {
    src: theme_dir + 'assets/images/**/*',
    build: theme_dir + 'build/images/',

    minOpts: {
        optimizationLevel: 5
    }
};


const compressImages = () => {
    gulp.src(imgConfig.src, { allowEmpty: true })
        .pipe(newer(imgConfig.build))
        .pipe(imagemin(imgConfig.minOpts))
        .pipe(size({ showFiles: true }))
        .pipe(gulp.dest(imgConfig.build))
        .pipe(browserSync.stream());
};
gulp.task('images', compressImages);


// concacts and minifys all personally written JS
const compileDefaultScripts = () => {
    gulp.src(jsFiles, { allowEmpty: true })
        .pipe(concat('app.js'))
        .pipe(gulp.dest(theme_dir + 'build/js'))
        .pipe(rename('app.min.js'))
        .pipe(uglify().on('error', function(e){
            console.log(e)
        }))
        .pipe(gulp.dest(theme_dir + 'build/js'));
};

gulp.task('scripts', compileDefaultScripts)


// Minify CSS
const compileDefaultStyle = () => {
    gulp.src(scssFiles)
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                outputStyle: 'compressed'
            }).on('error', function(e){
                console.log(e)
            })
        )
        .pipe(
            postcss([autoprefixer({
                overrideBrowserslist: ['last 3 versions', 'safari 7'],
                cascade: false
            })
        ]))
        .pipe(concat('style.min.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(theme_dir + '/build/css'));
};

gulp.task('stylesheets', compileDefaultStyle);


const compileAtfStyle = () => {
    gulp.src(atfScssFiles)
        .pipe(sourcemaps.init())
        .pipe(
            sass({
                outputStyle: 'compressed'
            }).on('error', function(e){
                console.log(e)
            })
        )
        .pipe(
            postcss([autoprefixer({
                overrideBrowserslist: ['last 3 versions', 'safari 7'],
                cascade: false
            })
        ]))
        .pipe(concat('atf.min.css'))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(theme_dir + 'build/atf/css'));
};

gulp.task('atf_stylesheets', compileAtfStyle);




// watch and rebuild .js files
gulp.watch(jsFiles, ['scripts']);

// watch and rebuild .css files
gulp.watch(watchScssFiles, ['stylesheets', 'atf_stylesheets']);

// Clean is forced to run *FIRST* using gulp.series
// Then subsequent tasks can be asynchronous in executing
gulp.task('serve', ['images', 'scripts', 'stylesheets', 'atf_stylesheets']);

// attach a default task, so when when just <code>gulp</code> the thing runs
gulp.task('default', ['serve']);