var gulp = require("gulp");
var sass = require("gulp-sass");

gulp.task("sass", function() {
  gulp
    .src("./sass/**/*.scss")
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(gulp.dest("./css/"));
});

gulp.task("sass-watch", function() {
  var watcher = gulp.watch("./sass/**/*.scss", gulp.task("sass"));
  watcher.on("change", function(event) {});
});

gulp.task(
  "default",
  gulp.series(gulp.parallel("sass", "sass-watch"), function() {})
);
