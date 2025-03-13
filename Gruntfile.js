/*!
 * Grunt file
 *
 * @package PronunciationRecording
 */

/* eslint-env node, es6 */
module.exports = function ( grunt ) {
	grunt.loadNpmTasks( 'grunt-banana-checker' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' );
	grunt.loadNpmTasks( 'grunt-eslint' );
	grunt.loadNpmTasks( 'grunt-stylelint' );

	grunt.initConfig( {
		eslint: {
			options: {
				cache: true
			},
			all: [
				'*.js',
				'resources/**/*.js',
				'**/*.json',
				'!node_modules/**',
				'!vendor/**',
				'!resources/mediawiki.libs.recorderjs/*'
			]
		},
		stylelint: {
			options: {
				cache: true
			},
			all: [ 'resources/**/*.css' ]
		},
		banana: {
			all: 'i18n/'
		},
		watch: {
			files: [
				'.{stylelintrc,eslintrc}.json',
				'<%= eslint.all %>',
				'<%= stylelint.all %>'
			],
			tasks: 'test'
		}
	} );

	grunt.registerTask( 'test', [ 'eslint', 'stylelint', 'banana' ] );
	grunt.registerTask( 'default', 'test' );
};
