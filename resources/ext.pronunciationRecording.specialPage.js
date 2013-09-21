( function ( mw, $ ) {
	$( document ).ready( function() {
		try {
			var pronunciationRecorder = new mw.PronunciationRecorder( );
			$( ".mw-pronunciationrecording-record" ).on("click", function() {
				$( ".mw-pronunciationrecording-record" ).attr('disabled','disabled');
				$( ".mw-pronunciationrecording-stop" ).removeAttr('disabled');
				pronunciationRecorder.startRecording();
			});
			$( ".mw-pronunciationrecording-stop" ).on("click", function() {
				$( ".mw-pronunciationrecording-stop" ).attr('disabled','disabled');
				$( ".mw-pronunciationrecording-preview" ).removeAttr('disabled');
				pronunciationRecorder.stopRecording();
			});
			$( ".mw-pronunciationrecording-preview" ).on("click", function() {
				$( ".mw-pronunciationrecording-preview" ).attr('disabled','disabled');
				$( ".mw-pronunciationrecording-clear" ).removeAttr('disabled');
				pronunciationRecorder.createSource();
			});
			$( ".mw-pronunciationrecording-clear" ).on("click", function() {
				$( ".mw-pronunciationrecording-record" ).removeAttr('disabled');
				$( ".mw-pronunciationrecording-preview-audio" ).remove();
				$( ".mw-pronunciationrecording-upload" ).remove();
			});
			$( document ).on( "click", ".mw-pronunciationrecording-upload", function() {
				var wikiText, pronunciationRecorderFileDetails, word, username, lang_code;
				word = $( ".mw-pronunciationrecording-information-word" ).val();
				lang_code = $( ".mw-pronunciationrecording-information-language" ).val();
				username = mw.user.getName();
				pronunciationRecorderFileDetails = new mw.PronunciationRecorderFileDetails( word, username, lang_code );
				wikiText = pronunciationRecorderFileDetails.generateWikiText();
				pronunciationRecorder.startUploading( function() {
					$( ".mw-pronunciationrecording-message" ).text( mw.message( 'pronunciationrecording-upload-publish-succeeded' ).text() );
				}, function() {
					$( ".mw-pronunciationrecording-message" ).text( mw.message( 'pronunciationrecording-upload-publish-failed' ).text() );
				}, wikiText );
			});
			$( ".mw-pronunciationrecording-toolbar" ).show();
		}
		catch ( e )
		{
			$( ".mw-pronunciationrecording-message" ).text( mw.message( 'pronunciationrecording-webaudio-not-supported' ).text() );
		}
	} );
} ( mediaWiki, jQuery ) );
