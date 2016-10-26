module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		meta: {
			dir: {
				css: 'prodaq/library/css',
				js: 'prodaq/library/js',
				less: 'prodaq/library/less'
			}
		}, // meta


		less:{
			default:{
				files:{
					'<%=meta.dir.css%>/style.css' : '<%=meta.dir.less%>/style.less',
					'<%=meta.dir.css%>/prodaq-admin.css' : '<%=meta.dir.less%>/admin/prodaq-admin.less',
					'<%=meta.dir.css%>/login.css' : '<%=meta.dir.less%>/admin/login.less'
				},
				compress: true
			},
		},
		cssmin: {
			target: {
				files: {
					// just overwrite style sheet with minified version
					'<%=meta.dir.css%>/style.css' : '<%=meta.dir.css%>/style.css'
				}
			}
		},
		watch:{
			css:{
				files: ['<%=meta.dir.less%>/**/*.less'],
				tasks: ['less', 'cssmin']
			},
		}
	});
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	grunt.registerTask('default', ['less', 'cssmin', 'watch']);

};
