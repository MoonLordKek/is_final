const { src, dest, watch } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");

//función sass
function css(callback)
{
   src("src/scss/**/*.scss") //identificar archivo de sass
       .pipe( plumber() )
       .pipe( sass() ) //compilarlo
       .pipe( dest("build/css") ); //almacenar
   callback();
}

//función para escuchar por los cambios
function dev (callback)
{
   watch("src/scss/**/*.scss", css);
   callback();
}
 
exports.css = css;
exports.dev = dev;