<?php
	class SpecialPronunciationRecording extends SpecialPage {

		/**
		 *The "isUploadAllowed()" and "isUserUploadAllowed()" are based on the Extension: UploadWizard.
		 *These 2 methods should be merged into the core.
		 */
		function __construct() {
			parent::__construct( 'PronunciationRecording' );
		}

		function execute( $par ) {
			$user = $this->getUser();
			$request = $this->getRequest();
			$output = $this->getOutput();
			$this->setHeaders();
			$output->setPageTitle( wfMessage( 'pronunciationrecording-title' )->plain() );

			if ( !( $this->isUploadAllowed() && $this->isUserUploadAllowed( $user ) ) ) {
				return;
			}

			$output->addModules( 'ext.pronunciationRecording.specialPage' );
			$output->addHTML( '<div class="mw-pronunciationrecording-error" id="mw-pronunciationrecording-error"></div>' );
			$output->addHTML( '<div class="mw-pronunciationrecording-toolbar" id="mw-pronunciationrecording-toolbar" >' );
			$output->addHTML( '<button class="mw-pronunciationrecording-record" id="mw-pronunciationrecording-record" >' .wfMessage( 'pronunciationrecording-toolbar-record-label' )->escaped().'</button>' );
			$output->addHTML( '<button class="mw-pronunciationrecording-stop" id="mw-pronunciationrecording-stop" disabled >' .wfMessage( 'pronunciationrecording-toolbar-stop-label' )->escaped().'</button>' );
			$output->addHTML( '<button class="mw-pronunciationrecording-preview" id="mw-pronunciationrecording-preview" disabled >' .wfMessage( 'pronunciationrecording-toolbar-preview-label' )->escaped().'</button>' );
			$output->addHTML( '<button class="mw-pronunciationrecording-clear" id="mw-pronunciationrecording-clear" disabled >' .wfMessage( 'pronunciationrecording-toolbar-clear-label' )->escaped().'</button>' );
			$output->addHTML( '<div class="mw-pronunciationrecording-preview-div" id="mw-pronunciationrecording-preview-div" disabled ></div>' );
			$output->addHTML( '</div>' );
		}

		/**
		 * Check if uploading is allowed
		 * Side effect: will print error page to wgOut if upload is not allowed.
		 * @return boolean -- true if can uploading is allowed
		 */
		private function isUploadAllowed() {
			// Check uploading enabled
			if ( !UploadBase::isEnabled() ) {
				$this->getOutput()->showErrorPage( 'uploaddisabled', 'uploaddisabledtext' );
				return false;
			}

			// XXX does wgEnableAPI affect all uploads too?

			// Check whether we actually want to allow changing stuff
			if ( wfReadOnly() ) {
				$this->getOutput()->readOnlyPage();
				return false;
			}

			// we got all the way here, so it must be okay to upload
			return true;
		}

		/**
		 * Check if the user can upload
		 * Side effect: will print error page to wgOut if cannot upload.
		 * @param User
		 * @return boolean -- true if can upload
		 */
		private function isUserUploadAllowed( $user ) {
			global $wgGroupPermissions;
			$output = $this->getOutput();

			if ( !$user->isAllowed( 'upload' ) ) {
				if ( !$user->isLoggedIn() && ( $wgGroupPermissions['user']['upload']|| $wgGroupPermissions['autoconfirmed']['upload'] ) ) {
					// Custom message if logged-in users without any special rights can 	upload
					$pronunciationRecordingPageName = $this->getTitle()->getPrefixedDBkey();
					$returnTo = array( 'returnto' => $pronunciationRecordingPageName );
					$loginTitle = SpecialPage::getTitleFor( 'UserLogin' );
					$loginURL = $loginTitle->getFullURL( $returnTo );
					$anonMsgHtml = $this->msg( 'pronunciationrecording-specialpage-error-nologin', $loginURL )->parse();
					$output->addHTML( Html::rawElement( 'span', array( 'class' => 'plainlinks' ), $anonMsgHtml ) );
					return;
				} else {
					throw new  PermissionsError( 'upload' );
				}
				return false;
			}

			// Check blocks
			if ( $user->isBlocked() ) {
				throw new UserBlockedError( $this->getUser()->mBlock );
			}

			// we got all the way here, so it must be okay to upload
			return true;
		}
	}

