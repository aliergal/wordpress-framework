module.exports = function(grunt) {
	grunt.initConfig({
		sass : {
			src : {
				options : {
					style : 'compressed'
				},
				files: [{
			        expand: true,
			        cwd: 'src/wp-content/themes/template/assets/css/sass',
			        src: ['*.scss'],
			        dest: 'src/wp-content/themes/template/assets/css',
			        ext: '.min.css'
			    }]
			}
		},

		watch : {
			target : {
				files : ['src/wp-content/themes/template/assets/css/sass/main.scss'],
				tasks : ['sass']
			}
		}
	});

	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
}