/*!
 * Grunt file
 *
 * @package PronunciationRecording
 */

/*jshint node:true */
module.exports = function ( grunt ) {
	grunt.loadNpmTasks( 'grunt-banana-checker' );
	grunt.loadNpmTasks( 'grunt-contrib-watch' );
	grunt.loadNpmTasks( 'grunt-jsonlint' );

	grunt.initConfig( {
		jsonlint: {
			all: 'i18n/*.json'
		},
		banana: {
			all: 'i18n/'
		},
		watch: {
			files: [
				'<%= jsonlint.all %>'
			],
			tasks: 'test'
		}
	} );

	grunt.registerTask( 'test', [ 'jsonlint', 'banana' ] );
	grunt.registerTask( 'default', 'test' );
};
