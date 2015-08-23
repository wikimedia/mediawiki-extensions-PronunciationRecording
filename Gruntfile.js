/*!
 * Grunt file
 *
 * @package PronunciationRecording
 */

/*jshint node:true */
module.exports = function ( grunt ) {
	grunt.loadNpmTasks( 'grunt-banana-checker' );
	grunt.loadNpmTasks( 'grunt-contrib-csslint' );
	grunt.loadNpmTasks( 'grunt-contrib-jshint' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' );
	grunt.loadNpmTasks( 'grunt-jscs' );
	grunt.loadNpmTasks( 'grunt-jsonlint' );

	grunt.initConfig( {
		jshint: {
			options: {
				jshintrc: true
			},
			all: [
				'*.js',
				'resources/**/*.js',
				'!resources/mediawiki.libs.recorderjs/*'
			]
		},
		jscs: {
			src: '<%= jshint.all %>'
		},
		csslint: {
			src: 'resources/**/*.css'
		},
		jsonlint: {
			all: 'i18n/*.json'
		},
		banana: {
			all: 'i18n/'
		},
		watch: {
			files: [
				'.{jshintignore,jshintrc,jscsrc,csslintrc}',
				'<%= jshint.all %>',
				'<%= csslint.all %>',
				'<%= jsonlint.all %>'
			],
			tasks: 'test'
		}
	} );

	grunt.registerTask( 'test', [ 'jshint', 'jscs', 'csslint', 'jsonlint', 'banana' ] );
	grunt.registerTask( 'default', 'test' );
};
