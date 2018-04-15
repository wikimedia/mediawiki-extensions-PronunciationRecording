( function ( mw, $ ) {
	$( function () {
		var pronunciationRecorder;
		try {
			pronunciationRecorder = new mw.PronunciationRecorder();
			$( '.mw-pronunciationrecording-message' ).text( mw.message( 'pronunciationrecording-mic-access-notify' ).text() );
			$( '.mw-pronunciationrecording-record' ).on( 'click', function () {
				$( '.mw-pronunciationrecording-record' ).prop( 'disabled', true );
				$( '.mw-pronunciationrecording-stop' ).prop( 'disabled', false );
				$( '.mw-pronunciationrecording-message' ).text( mw.message( 'pronunciationrecording-recording-notify' ).text() );
				pronunciationRecorder.startRecording();
			} );
			$( '.mw-pronunciationrecording-stop' ).on( 'click', function () {
				$( '.mw-pronunciationrecording-message' ).empty();
				$( '.mw-pronunciationrecording-stop' ).prop( 'disabled', true );
				$( '.mw-pronunciationrecording-clear' ).prop( 'disabled', false );
				pronunciationRecorder.stopRecording();
				pronunciationRecorder.createSource();
			} );
			$( '.mw-pronunciationrecording-clear' ).on( 'click', function () {
				$( '.mw-pronunciationrecording-record' ).prop( 'disabled', false );
				$( '.mw-pronunciationrecording-preview-audio' ).remove();
				$( '.mw-pronunciationrecording-upload' ).remove();
				$( '.mw-pronunciationrecording-message' ).empty();
			} );
			$( document ).on( 'click', '.mw-pronunciationrecording-upload', function () {
				var pronunciationRecorderFileDetails, word, username, langCode;
				word = $( '.mw-pronunciationrecording-information-word' ).val();
				langCode = $( '.mw-pronunciationrecording-information-language' ).val();
				username = mw.user.getName();
				pronunciationRecorderFileDetails = new mw.PronunciationRecorderFileDetails( word, username, langCode );
				$( '.mw-pronunciationrecording-upload' ).prop( 'disabled', true );
				pronunciationRecorder.startUploading( function () {
					var name, $fileLink;
					name = 'File:' + pronunciationRecorderFileDetails.generateFileName();
					$fileLink = $( '<a>' );
					$fileLink.attr( 'href', mw.util.getUrl( name ) );
					$fileLink.text( name );
					$( '.mw-pronunciationrecording-message' ).text( mw.message( 'pronunciationrecording-upload-publish-succeeded' ).text() );
					$( '.mw-pronunciationrecording-message' ).append( ' ' );
					$( '.mw-pronunciationrecording-message' ).append( $fileLink );
				}, function () {
					$( '.mw-pronunciationrecording-message' ).text( mw.message( 'pronunciationrecording-upload-publish-failed' ).text() );
				}, pronunciationRecorderFileDetails );
			} );
			$( '.mw-pronunciationrecording-toolbar' ).show();
		} catch ( e ) {
			$( '.mw-pronunciationrecording-message' ).text( mw.message( 'pronunciationrecording-webaudio-not-supported' ).text() );
		}
	} );
}( mediaWiki, jQuery ) );
