/**
 * Base Grunt configuration
 */
module.exports = function( grunt ){
	'use strict';
	require( 'matchdep' ).filterDev( 'grunt-*' ).forEach( grunt.loadNpmTasks );

    grunt.initConfig({
        pkg: grunt.file.readJSON( 'package.json' ),
		
        // Add Compass compilation for css/scss with import reference to the base of bower_components
		compass: {
			build: {
				options: {
					noLineComments: true,
					debugInfo: false,
					sourcemap: true,
					importPath: 'bower_components/',
					sassDir: 'src/scss',
					cssDir: 'css/'
				}
			}
		},
		// Concatenate all src JS files under js/src
        concat: {
        	options: {
        		separator: ';',
        	},
        	dist: {
        		files: {
	        		'js/bootstrap.js':		[ 'bower_components/bootstrap/js/affix.js',
	        			                  	  'bower_components/bootstrap/js/button.js',
	        			                  	  'bower_components/bootstrap/js/carousel.js',
	        			                  	  'bower_components/bootstrap/js/collapse.js',
	        			                  	  'bower_components/bootstrap/js/dropdown.js',
	        			                  	  'bower_components/bootstrap/js/scrollspy.js',
	        			                  	  'bower_components/bootstrap/js/tab.js',
	        			                  	  'bower_components/bootstrap/js/transition.js' ],
        			'js/html5shiv.min.js':	[ 'bower_components/html5shiv/dist/html5shiv.js' ],
        			'js/main.js':			[ 'src/js/{,*/}*.js' ],
        			'js/respond.min.js':	[ 'bower_components/respond/dest/respond.min.js' ]
        		}
        	}
        },
        copy: {
        	colorbox: {
        		expand: true,
        		flatten: true,
        		src: 'bower_components/jquery-colorbox/jquery.colorbox-min.js', 
        		dest: 'js/'
        	}
        },
        // Minification of CSS files
        cssmin: {
            options: {
            	compatibility: 'ie8',
                keepSpecialComments: '*',
                advanced: false
            },
            build: {
            	files: {
            		'css/bootstrap.min.css': [ 'css/bootstrap.css' ],
            		'css/main.min.css': [ 'css/main.css' ]
            	}
            }
        },
        // Standard watch method, use via terminal if IDE integration is not used
        watch: {
            js: {
                files: [ 'src/js/{,*/}*.js' ],
                tasks: [ 'buildjs' ]
            },
            css: {
                files: [ 'src/scss/{,*/}*.scss' ],
                tasks: [ 'buildcss' ]
            }
        },
        // Minify JS files
        uglify: {
            build: {
                files: {
                    'js/bootstrap.min.js': [ 'js/bootstrap.js' ],
                    'js/main.min.js': [ 'js/main.js' ]
                }
            }
        }
    });
    grunt.registerTask( 'buildjs', [ 'concat', 'uglify' ] );
    grunt.registerTask( 'buildcss', [ 'compass', 'cssmin' ] );
    grunt.registerTask( 'buildall', [ 'buildcss', 'buildjs' ] );
    grunt.registerTask( 'setupenv', [ 'buildall', 'copy:colorbox' ] );
};