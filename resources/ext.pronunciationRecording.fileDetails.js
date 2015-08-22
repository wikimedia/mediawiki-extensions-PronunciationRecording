( function ( mw ) {
	mw.PronunciationRecorderFileDetails = function ( word, username, langCode ) {
		var description, dateObj, fulldate, source, author, permission, category, langSubst = '{{subst:#language:' + langCode + '|en}}';
		dateObj = new Date();
		description = 'Pronunciation of the term \'' + word + '\' in ' + langSubst;

		function pad( param ) {
			if ( param < 10 ) {
				return '0' + param;
			} else {
				return param;
			}
		}

		fulldate = dateObj.getFullYear() + '-' + pad( dateObj.getMonth() + 1 ) + '-' + pad( dateObj.getDate() );
		source = '{{Created with PronunciationRecording}}';
		author = '[[User:' + username + '|' + username + ']]';
		permission = '{{Cc-by-sa-3.0}}';
		category = '[[Category:' + langSubst + ' pronunciation|' + word + ']]';

		return {
			generateWikiText: function () {
				var wikitext = '{{Information\n |description = ' + description + '\n |date = ' + fulldate + '\n |source = ' + source + '\n |author = ' + author + '\n |permission = ' + permission + '\n}}\n' + category;
				return wikitext;
			},

			generateFileName: function () {
				var filename = langCode + '-' + word + '.wav';
				return filename;

			}
		};
	};
}( mediaWiki, jQuery ) );
