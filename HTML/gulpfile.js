// Requires the gulp plugin
var gulp = require('gulp');

// Requires the gulp-sass plugin
var sass = require('gulp-sass');

// Requires the browser-sync plugin
var browserSync = require('browser-sync').create();

gulp.task('hello', function() {
  console.log('Hi! Its Cork Admin. If you are reading this. It means you have successfully installed task manager and gulp.');
});

console.log('Cork Admin Template v1.8.0');

/*
	=====================================================================
	=====================================================================
	|																	|
	|	@include ->  Writing GULP-SASS Functions For All Demos 			|
	|																	|
	=====================================================================
	=====================================================================
*/


/*
	===============
		Demo 1
	===============
*/

/* ===== LTR ===== */

gulp.task('demo1:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('ltr/demo1/sass/assets/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('ltr/demo1/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo1:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('ltr/demo1/sass/plugins/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('ltr/demo1/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/* ===== RTL ===== */

gulp.task('demo1-rtl:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('rtl/demo1/sass/assets/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('rtl/demo1/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo1-rtl:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('rtl/demo1/sass/plugins/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('rtl/demo1/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})


/*
	==================
		Demo 2 
	==================
*/

/* ===== LTR ===== */

gulp.task('demo2:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('ltr/demo2/sass/assets/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('ltr/demo2/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo2:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('ltr/demo2/sass/plugins/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('ltr/demo2/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/* ===== RTL ===== */

gulp.task('demo2-rtl:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('rtl/demo2/sass/assets/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('rtl/demo2/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo2-rtl:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('rtl/demo2/sass/plugins/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('rtl/demo2/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})


/*
	===============
		Demo 3
	===============
*/

/* ===== LTR ===== */

gulp.task('demo3:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('ltr/demo3/sass/assets/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('ltr/demo3/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo3:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('ltr/demo3/sass/plugins/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('ltr/demo3/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/* ===== RTL ===== */

gulp.task('demo3-rtl:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('rtl/demo3/sass/assets/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('rtl/demo3/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo3-rtl:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('rtl/demo3/sass/plugins/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('rtl/demo3/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/*
	==================
		Demo 4 
	==================
*/

/* ===== LTR ===== */

gulp.task('demo4:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('ltr/demo4/sass/assets/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('ltr/demo4/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo4:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('ltr/demo4/sass/plugins/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('ltr/demo4/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/* ===== RTL ===== */

gulp.task('demo4-rtl:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('rtl/demo4/sass/assets/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('rtl/demo4/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo4-rtl:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('rtl/demo4/sass/plugins/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('rtl/demo4/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})


/*
	==================
		Demo 5 
	==================
*/

/* ===== LTR ===== */

gulp.task('demo5:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('ltr/demo5/sass/assets/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('ltr/demo5/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo5:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('ltr/demo5/sass/plugins/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('ltr/demo5/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/* ===== RTL ===== */

gulp.task('demo5-rtl:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('rtl/demo5/sass/assets/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('rtl/demo5/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo5-rtl:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('rtl/demo5/sass/plugins/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('rtl/demo5/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})


/*
	==================
		Demo 6 
	==================
*/

/* ===== LTR ===== */

gulp.task('demo6:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('ltr/demo6/sass/assets/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('ltr/demo6/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo6:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('ltr/demo6/sass/plugins/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('ltr/demo6/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/* ===== RTL ===== */

gulp.task('demo6-rtl:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('rtl/demo6/sass/assets/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('rtl/demo6/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo6-rtl:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('rtl/demo6/sass/plugins/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('rtl/demo6/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/*
	==================
		Demo 7 
	==================
*/

/* ===== LTR ===== */

gulp.task('demo7:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('ltr/demo7/sass/assets/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('ltr/demo7/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo7:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('ltr/demo7/sass/plugins/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('ltr/demo7/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/* ===== RTL ===== */

gulp.task('demo7-rtl:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('rtl/demo7/sass/assets/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('rtl/demo7/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo7-rtl:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('rtl/demo7/sass/plugins/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('rtl/demo7/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})


/*
	==================
		Demo 8 
	==================
*/

/* ===== LTR ===== */

gulp.task('demo8:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('ltr/demo8/sass/assets/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('ltr/demo8/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo8:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('ltr/demo8/sass/plugins/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('ltr/demo8/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/* ===== RTL ===== */

gulp.task('demo8-rtl:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('rtl/demo8/sass/assets/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('rtl/demo8/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo8-rtl:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('rtl/demo8/sass/plugins/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('rtl/demo8/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})


/*
	==================
		Demo 9 
	==================
*/

/* ===== LTR ===== */

gulp.task('demo9:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('ltr/demo9/sass/assets/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('ltr/demo9/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo9:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('ltr/demo9/sass/plugins/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('ltr/demo9/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/* ===== RTL ===== */

gulp.task('demo9-rtl:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('rtl/demo9/sass/assets/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('rtl/demo9/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo9-rtl:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('rtl/demo9/sass/plugins/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('rtl/demo9/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})


/*
	==================
		Demo 10 
	==================
*/

/* ===== LTR ===== */

gulp.task('demo10:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('ltr/demo10/sass/assets/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('ltr/demo10/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo10:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('ltr/demo10/sass/plugins/**/*.scss') // Gets all files ending with .scss in ltr/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('ltr/demo10/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

/* ===== RTL ===== */

gulp.task('demo10-rtl:sass:assets', function() {
	console.log('Command executed successfully compiling SCSS in assets.');
	 return gulp.src('rtl/demo10/sass/assets/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
	    .pipe(sass())
	    .pipe(gulp.dest('rtl/demo10/assets/css'))
	    .pipe(browserSync.reload({
	      stream: true
	}))
})

gulp.task('demo10-rtl:sass:plugins', function() {
	console.log('Command executed successfully compiling SCSS in plugin.');
  return gulp.src('rtl/demo10/sass/plugins/**/*.scss') // Gets all files ending with .scss in rtl/scss and children dirs
    .pipe(sass())
    .pipe(gulp.dest('rtl/demo10/plugins/'))
    .pipe(browserSync.reload({
      stream: true
    }))
})


/*
	=====================================================================
	=====================================================================
	|																	|
	|	@include ->  Writing WATCH Functions For All Demos 				|
	|																	|
	=====================================================================
	=====================================================================
*/


/*
	===============
		Demo 1
	===============
*/

/* ===== LTR ===== */

gulp.task('watch:demo1',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'ltr/demo1'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('ltr/demo1');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('ltr/demo1/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('ltr/demo1/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('ltr/demo1/**/*.scss', gulp.series('demo1:sass:assets', 'demo1:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));

/* ===== RTL ===== */

gulp.task('watch:demo1-rtl',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'rtl/demo1'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('rtl/demo1');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('rtl/demo1/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('rtl/demo1/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('rtl/demo1/**/*.scss', gulp.series('demo1-rtl:sass:assets', 'demo1-rtl:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));



/*
	==================
		Demo 2
	==================
*/

/* ===== LTR ===== */

gulp.task('watch:demo2',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'ltr/demo2'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('ltr/demo2');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('ltr/demo2/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('ltr/demo2/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('ltr/demo2/**/*.scss', gulp.series('demo2:sass:assets', 'demo2:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));

/* ===== RTL ===== */

gulp.task('watch:demo2-rtl',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'rtl/demo2'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('rtl/demo2');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('rtl/demo2/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('rtl/demo2/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('rtl/demo2/**/*.scss', gulp.series('demo2-rtl:sass:assets', 'demo2-rtl:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));


/*
	===============
		Demo 3
	===============
*/

/* ===== LTR ===== */

gulp.task('watch:demo3',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'ltr/demo3'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('ltr/demo3');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('ltr/demo3/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('ltr/demo3/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('ltr/demo3/**/*.scss', gulp.series('demo3:sass:assets', 'demo3:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));

/* ===== RTL ===== */

gulp.task('watch:demo3-rtl',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'rtl/demo3'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('rtl/demo3');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('rtl/demo3/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('rtl/demo3/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('rtl/demo3/**/*.scss', gulp.series('demo3-rtl:sass:assets', 'demo3-rtl:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));



/*
	==================
		Demo 4
	==================
*/

/* ===== LTR ===== */

gulp.task('watch:demo4',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'ltr/demo4'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('ltr/demo4');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('ltr/demo4/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('ltr/demo4/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('ltr/demo4/**/*.scss', gulp.series('demo4:sass:assets', 'demo4:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));

/* ===== RTL ===== */

gulp.task('watch:demo4-rtl',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'rtl/demo4'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('rtl/demo4');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('rtl/demo4/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('rtl/demo4/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('rtl/demo4/**/*.scss', gulp.series('demo4-rtl:sass:assets', 'demo4-rtl:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));



/*
	==================
		Demo 5
	==================
*/

/* ===== LTR ===== */

gulp.task('watch:demo5',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'ltr/demo5'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('ltr/demo5');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('ltr/demo5/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('ltr/demo5/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('ltr/demo5/**/*.scss', gulp.series('demo5:sass:assets', 'demo5:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));

/* ===== RTL ===== */

gulp.task('watch:demo5-rtl',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'rtl/demo5'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('rtl/demo5');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('rtl/demo5/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('rtl/demo5/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('rtl/demo5/**/*.scss', gulp.series('demo5-rtl:sass:assets', 'demo5-rtl:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));



/*
	==================
		Demo 6
	==================
*/

/* ===== LTR ===== */

gulp.task('watch:demo6',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'ltr/demo6'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('ltr/demo6');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('ltr/demo6/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('ltr/demo6/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('ltr/demo6/**/*.scss', gulp.series('demo6:sass:assets', 'demo6:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));

/* ===== RTL ===== */

gulp.task('watch:demo6-rtl',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'rtl/demo6'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('rtl/demo6');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('rtl/demo6/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('rtl/demo6/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('rtl/demo6/**/*.scss', gulp.series('demo6-rtl:sass:assets', 'demo6-rtl:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));



/*
	==================
		Demo 7
	==================
*/

/* ===== LTR ===== */

gulp.task('watch:demo7',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'ltr/demo7'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('ltr/demo7');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('ltr/demo7/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('ltr/demo7/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('ltr/demo7/**/*.scss', gulp.series('demo7:sass:assets', 'demo7:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));

/* ===== RTL ===== */

gulp.task('watch:demo7-rtl',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'rtl/demo7'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('rtl/demo7');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('rtl/demo7/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('rtl/demo7/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('rtl/demo7/**/*.scss', gulp.series('demo7-rtl:sass:assets', 'demo7-rtl:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));


/*
	==================
		Demo 8
	==================
*/

/* ===== LTR ===== */

gulp.task('watch:demo8',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'ltr/demo8'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('ltr/demo8');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('ltr/demo8/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('ltr/demo8/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('ltr/demo8/**/*.scss', gulp.series('demo8:sass:assets', 'demo8:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));

/* ===== RTL ===== */

gulp.task('watch:demo8-rtl',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'rtl/demo8'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('rtl/demo8');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('rtl/demo8/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('rtl/demo8/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('rtl/demo8/**/*.scss', gulp.series('demo8-rtl:sass:assets', 'demo8-rtl:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));


/*
	==================
		Demo 9
	==================
*/

/* ===== LTR ===== */

gulp.task('watch:demo9',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'ltr/demo9'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('ltr/demo9');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('ltr/demo9/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('ltr/demo9/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('ltr/demo9/**/*.scss', gulp.series('demo9:sass:assets', 'demo9:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));

/* ===== RTL ===== */

gulp.task('watch:demo9-rtl',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'rtl/demo9'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('rtl/demo9');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('rtl/demo9/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('rtl/demo9/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('rtl/demo9/**/*.scss', gulp.series('demo9-rtl:sass:assets', 'demo9-rtl:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));



/*
	==================
		Demo 10
	==================
*/

/* ===== LTR ===== */

gulp.task('watch:demo10',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'ltr/demo10'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('ltr/demo10');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('ltr/demo10/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('ltr/demo10/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('ltr/demo10/**/*.scss', gulp.series('demo10:sass:assets', 'demo10:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));

/* ===== RTL ===== */

gulp.task('watch:demo10-rtl',  gulp.series(function() {

	console.log('Executing Watch Function');

	browserSync.init({
	    server: {
	      baseDir: 'rtl/demo10'
	    },
	})

	// Watch : - HTML

	var html = gulp.watch('rtl/demo10');
	html.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.html");
	})

	// Watch : - JS

	var js = gulp.watch('rtl/demo10/**/*.js');
	  js.on('change', function(path, stats) {
	    browserSync.notify("Compiling, please wait!");
	    browserSync.reload("*.js");
	})
	

	// Watch : - CSS

	// @Note: - If you are working with CSS ( not SCSS ) but want to work with gulp for fast pace 
	// then, uncomment the code below 


	// var css = gulp.watch('rtl/demo10/**/*.css');
	// css.on('change', function(path, stats) {
	//     browserSync.notify("Injecting CSS!");
	//     browserSync.reload("*.css");
	// })


	// Watch : - SCSS

	var scss = gulp.watch('rtl/demo10/**/*.scss', gulp.series('demo10-rtl:sass:assets', 'demo10-rtl:sass:plugins'));
	scss.on('change', function(path, stats) {
	    browserSync.notify("Injecting SCSS!");
	    browserSync.reload("*.scss");
	})

}));