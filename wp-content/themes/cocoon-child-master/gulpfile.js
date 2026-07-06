// Gulp と各プラグインの読み込み
const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const rename = require('gulp-rename');
const plumber = require('gulp-plumber');

// TABICO LP用 CSS（css/lp.css）をビルドするタスク
const scssBuildLp = (done) => {
    gulp.src('./scss/lp/lp.scss')
        .pipe(plumber())
        .pipe(sass({
            outputStyle: "expanded"
        }))
        .pipe(rename({basename: 'lp'}))
        .pipe(gulp.dest('./css/'));
    done();
}

// SCSS ファイルの変更を監視して自動ビルドするタスク
const watchFiles = (done) => {
    gulp.watch('./scss/lp/**/*.scss', scssBuildLp);
    done();
}

// デフォルトタスク（npx gulp で一括ビルド）
exports.default = gulp.series(scssBuildLp);

// ファイル監視タスク（npx gulp watch で実行可能）
exports.watch = watchFiles;
