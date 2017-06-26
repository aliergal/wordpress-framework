module.exports = function(grunt) {

	// Change this
	var template_name = 'template';

	grunt.initConfig({
		sass : {
			src : {
				options : {
					style : 'compressed'
				},
				files: [{
			        expand: true,
			        cwd: 'src/wp-content/themes/'+template_name+'/assets/css/sass',
			        src: ['*.scss'],
			        dest: 'src/wp-content/themes/'+template_name+'/assets/css',
			        ext: '.min.css'
			    }]
			}
		},

		copy: {
			all: {
				expand: true,
			    cwd: 'src',
			    src: '**',
			    dest: 'dist/',
			},
			themes: {
				expand: true,
				cwd: 'src/wp-content/themes',
				src: '**',
			    dest: 'dist/wp-content/themes/',
			},
			plugins: {
				expand: true,
				cwd: 'src/wp-content/plugins',
				src: '**',
			    dest: 'dist/wp-content/plugins/',
			},
			uploads: {
				expand: true,
				cwd: 'src/wp-content/uploads',
				src: '**',
			    dest: 'dist/wp-content/uploads/',
			}
		},

		concat: {
		    css: {
				src: ['src/wp-content/themes/'+template_name+'/assets/css/**/*.css'],
				dest: 'src/wp-content/themes/'+template_name+'/style.css',
		    }
		},

		watch : {
			target : {
				files : ['src/wp-content/themes/'+template_name+'/assets/css/sass/main.scss'],
				tasks : ['sass']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
}