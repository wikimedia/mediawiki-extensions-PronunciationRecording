<?php
	class SpecialPronunciationRecording extends SpecialPage {

		function __construct() {
			parent::__construct( 'PronunciationRecording' );
		}

		function execute( $par ) {
			$request = $this->getRequest();
			$output = $this->getOutput();
			$this->setHeaders();
			$output->setPageTitle( wfMessage( 'pronunciationrecording-title' )->plain() );
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
	}

