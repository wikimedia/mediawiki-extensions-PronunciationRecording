( function ( mw, $ ) {
	mw.PronunciationRecorder = function( ) {

		var audioContext, recorder, uploadHandler, uploadWizardUpload, cachedBlob,
			userAgent = mw.message( 'pronunciationrecording-title' ).text();

		function startUserMedia( stream ) {
			$( ".mw-pronunciationrecording-record" ).removeAttr('disabled');
			$( ".mw-pronunciationrecording-message" ).empty();
			var input = audioContext.createMediaStreamSource( stream );
			mw.log( 'Media Stream created' );
			try {
				// This call may fail if not all APIs necessary are supported.
				recorder = new Recorder( input );
				mw.log( 'Audio Recorder initialized' );
			} catch ( noRecorder ) {
				// TODO: Emit error message so the UI can reflect it
				mw.log( 'Audio Recorder initialization failed.' );
			}
		}
		function getBlob( callback ) {
			if( cachedBlob ) {
				callback( cachedBlob );
			}
			else {
				recorder.exportWAV(
					function( blob ) {
						cachedBlob = blob;
						callback( cachedBlob );
					}
				);
			}
		}

		function errorCallBack( e ) {
			mw.log( 'No live audio input' );
		}

		function publishUpload( ok, err, fileDetails ) {
			var params = {
				action: 'upload',
				filekey: uploadWizardUpload.fileKey,
				filename: fileDetails.generateFileName(),
				comment: "User created page with " + userAgent,
				text : fileDetails.generateWikiText()
			};

			function publishOk( response ) {
				if( response.upload.result == "Success" )
				{
					ok();
					mw.log( 'Upload published successfully' );
				}
				else
				{
					publishFail();
				}
			}

			function publishFail() {
				err();
				mw.log( 'Upload could not be successfully published' );
			}
			uploadWizardUpload.api.postWithEditToken( params, publishOk, publishFail );

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
				if ( !recorder ) {
					return mw.log( 'Requested recording despite recorder was not initialized.' );
				}
				cachedBlob = null;
				recorder.clear();
				recorder.record();
			},

			stopRecording: function() {
				recorder.stop();
			},

			createSource: function( callback ) {
				if ( recorder ) {
					getBlob(
						// this is the asynchronous callback that's called when exportWAV finishes encoding
						function( blob ) {
							var message = $( '<br><audio controls class="mw-pronunciationrecording-preview-audio"><source src="' + URL.createObjectURL( blob )  + '" type="audio/wav"></audio>' );
							var upload = $( '<br><button class="mw-pronunciationrecording-upload">' + mw.message('pronunciationrecording-toolbar-upload-label').escaped() + '</button>' );
							$( ".mw-pronunciationrecording-preview-div" ).empty();
							upload.prependTo( ".mw-pronunciationrecording-preview-div" );
							message.prependTo( ".mw-pronunciationrecording-preview-div" );
						}
					);
				}
			},

			startUploading: function( ok, error, fileDetails ) {
				var config, api, uploadWizard, filesDiv;
				config = { 'enableFormData' : true };
				filesDiv = document.createElement( "div" );
				uploadWizard = new mw.UploadWizard( config );
				uploadWizardUpload = new mw.UploadWizardUpload( uploadWizard, filesDiv );

				// XXX: Hacks until UploadWizard can be better refactored
				// or there is a separate client-side upload library
				uploadWizardUpload.deedPreview = {
					setup: $.noop
				};

				uploadWizardUpload.details = {
					populate: $.noop
				};
				getBlob(
					function( blob ) {
						uploadWizardUpload.file = blob;
						uploadWizardUpload.file.name = 'upload.wav';
						uploadHandler = uploadWizardUpload.getUploadHandler();
						uploadHandler.start();
						$.subscribeReady( 'thumbnails.' + uploadWizardUpload.index, function() {
							publishUpload( ok, error, fileDetails );
						} );
					}
				);
			}
		};
	};
} ( mediaWiki, jQuery ) );
