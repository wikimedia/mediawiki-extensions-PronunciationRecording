( function ( mw, $ ) {
	mw.PronunciationRecorderFileDetails = function( word, username, lang_code ) {
		var description, date_obj, fulldate, source, author, permission, category, lang_subst = "{{subst:#language:" + lang_code + "|en}}";
		date_obj = new Date();
		description = "Pronunciation of the term '" + word + "' in " + lang_subst;

		function pad( param ) {
			if( param < 10 ) {
				return '0' + param;
			} else {
				return param;
			}
		}

		fulldate = date_obj.getFullYear() + "-" + pad( date_obj.getMonth() + 1 ) + "-" + pad( date_obj.getDate() );
		source = '{{Created with PronunciationRecording}}';
		author = '[[User:' + username + '|' + username + ']]';
		permission = '{{Cc-by-sa-3.0}}';
		category = '[[Category:' + lang_subst + ' pronunciation|' + word + ']]';

		return {
			generateWikiText: function()
			{
				var wikitext = '{{Information\n |description = ' + description + '\n |date = ' + fulldate + '\n |source = ' + source + '\n |author = ' + author + '\n |permission = ' + permission + '\n}}\n' + category;
				return wikitext;
			},

			generateFileName: function()
			{
				var filename = lang_code + '-' + word + '.wav';
				return filename;

			}
		}
	}
} ( mediaWiki, jQuery ) );
