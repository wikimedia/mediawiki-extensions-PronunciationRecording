( function ( mw, $ ) {
	mw.PronunciationRecorder = function( ) {

		var audioContext, recorder;

		function startUserMedia( stream ) {
			var input = audioContext.createMediaStreamSource( stream );
			mw.log( 'Media Stream created' );
			recorder = new Recorder( input );
			mw.log( 'Audio Recorder initialized' );
		}

		function errorCallBack( e ) {
			mw.log( 'No live audio input' );
		}

		try {
			// webkit shim
			window.AudioContext = window.AudioContext || window.webkitAudioContext;
			navigator.getUserMedia = ( navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia );
			window.URL = window.URL || window.webkitURL;
			if ( window.AudioContext ){
				mw.log( 'Audio Context set up' );
			} else {
				mw.log( 'WebAudio API is not supported for this browser' );
			}
			audioContext = new AudioContext;
			if ( navigator.getUserMedia ){
				mw.log( 'getUserMedia is supported' );
			} else {
				mw.log( 'getUserMedia is not supported' );
			}
		} catch ( e ) {
			mw.log( 'WebAudio API is not supported for this browser' );
			throw e;
		}
		navigator.getUserMedia( {audio: true}, startUserMedia, errorCallBack );

		return {
			startRecording: function() {
				recorder.clear();
				recorder.record();
			},

			stopRecording: function() {
				recorder.stop();
			},

			createSource: function( callback ) {
				if ( recorder ) {
					recorder.exportWAV(
					// this is the asynchronous callback that's called when exportWAV finishes encoding
						function( blob ) {
							var message = $( '<br><audio controls class="mw-pronunciationrecording-preview-audio"><source src="' + URL.createObjectURL( blob )  + '" type="audio/wav"></audio>' );
							var upload = $( '<br><button class="mw-pronunciationrecording-upload">' + mw.message('pronunciationrecording-toolbar-upload-label').escaped() + '</button>' );
							upload.prependTo( ".mw-pronunciationrecording-preview-div" );
							message.prependTo( ".mw-pronunciationrecording-preview-div" );
						}
					);
				}
			}

		}
	};
} ( mediaWiki, jQuery ) );

