<?php
class SpecialPronunciationRecording extends SpecialPage {

	/**
	 * The "isUploadAllowed()" and "isUserUploadAllowed()" are based on the Extension: UploadWizard.
	 * These 2 methods should be merged into the core.
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
		$output->addHTML( '<div class="mw-pronunciationrecording-message" ></div>' );
		$output->addHTML( '<div class="mw-pronunciationrecording-toolbar" >' );
		$output->addHTML( '<button class="mw-pronunciationrecording-record" disabled >' .
			wfMessage( 'pronunciationrecording-toolbar-record-label' )->escaped()
			. '</button>' );
		$output->addHTML( '<button class="mw-pronunciationrecording-stop" disabled >' .
			wfMessage( 'pronunciationrecording-toolbar-stop-label' )->escaped()
			. '</button>' );
		$output->addHTML( '<button class="mw-pronunciationrecording-clear" disabled >'
			. wfMessage( 'pronunciationrecording-toolbar-clear-label' )->escaped()
			. '</button>' );
		$output->addHTML( '<div class="mw-pronunciationrecording-preview-div" ></div>' );
		$output->addHTML( '</div>' );
		$output->addHTML( '<form>' );
		$output->addHTML( '<fieldset>' );
		$output->addHTML( '<legend>'
			. wfMessage( 'pronunciationrecording-information-label' )->escaped()
			. '</legend>' );
		$output->addHTML( '<b>'
			. wfMessage( 'pronunciationrecording-information-word-label' )->escaped()
			. '</b><input type="text" class="mw-pronunciationrecording-information-word"><br><br>' );
		$languages = Language::fetchLanguageNames( null, 'mw' );
		$output->addHTML( '<b>'
			. wfMessage( 'pronunciationrecording-information-language-label' )->escaped()
			. '</b><select class="mw-pronunciationrecording-information-language">' );
		foreach ( $languages as $lang_code => $lang_name ) {
			$output->addHTML( Html::element(
				'option',
				[ 'value' => $lang_code ],
				$lang_code . ' - ' . $lang_name )
			);
		}
		$output->addHTML( '</select>' );
		$output->addHTML( '<br><br>'
			. wfMessage( 'pronunciationrecording-information-license-prompt', $user )->escaped() );
		$output->addHTML( '<div class="mw-pronunciationrecording-information-license-cc-by-sa" >'
			. wfMessage(
				'mwe-upwiz-source-ownwork-assert-cc-by-sa-3.0',
				1,
				$user,
				'http://creativecommons.org/licenses/by-sa/3.0/deed.en'
			)->parse() . '<br>' );
		$output->addHTML(
			wfMessage( 'mwe-upwiz-source-ownwork-cc-by-sa-3.0-explain', 1 )->escaped()
			. '<br></div>' );
		$output->addHTML( '</fieldset>' );
		$output->addHTML( '</form>' );
	}

	/**
	 * Check if uploading is allowed
	 * Side effect: will print error page to wgOut if upload is not allowed.
	 * @return bool true if can uploading is allowed
	 */
	private function isUploadAllowed() {
		// Check uploading enabled
		if ( !UploadBase::isEnabled() ) {
			$this->getOutput()->showErrorPage( 'uploaddisabled', 'uploaddisabledtext' );
			return false;
		}

		// XXX does wgEnableAPI affect all uploads too?

		// Check whether we actually want to allow changing stuff
		$this->checkReadOnly();

		// we got all the way here, so it must be okay to upload
		return true;
	}

	/**
	 * Check if the user can upload
	 * Side effect: will print error page to wgOut if cannot upload.
	 * @param User $user
	 * @return bool true if can upload
	 */
	private function isUserUploadAllowed( $user ) {
		global $wgGroupPermissions;
		$output = $this->getOutput();

		if ( !$user->isAllowed( 'upload' ) ) {
			if (
				!$user->isLoggedIn() &&
				(
					$wgGroupPermissions['user']['upload'] ||
					$wgGroupPermissions['autoconfirmed']['upload']
				)
			) {
				// Custom message if logged-in users without any special rights can 	upload
				$pronunciationRecordingPageName = $this->getPageTitle()->getPrefixedDBkey();
				$returnTo = [ 'returnto' => $pronunciationRecordingPageName ];
				$loginTitle = SpecialPage::getTitleFor( 'UserLogin' );
				$loginURL = $loginTitle->getFullURL( $returnTo );
				$anonMsgHtml = $this->msg(
						'pronunciationrecording-specialpage-error-nologin',
						$loginURL
					)->parse();
				$output->addHTML( Html::rawElement( 'span', [ 'class' => 'plainlinks' ], $anonMsgHtml ) );
				return;
			} else {
				throw new PermissionsError( 'upload' );
			}
			return false;
		}

		// Check blocks
		if ( $user->getBlock() ) {
			throw new UserBlockedError( $user->getBlock() );
		}

		// we got all the way here, so it must be okay to upload
		return true;
	}
}
