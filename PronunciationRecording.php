<?php

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Invalid entry point.' );
}

$wgExtensionCredits[ 'specialpage' ][] = [
	'path' => __FILE__,
	'name' => 'PronunciationRecording',
	'author' => [
		'Rahul Maliakkal',
		'Matthew Flaschen',
		'Michael Dale',
	],
	'url' => 'https://www.mediawiki.org/wiki/Extension:PronunciationRecording',
	'descriptionmsg' => 'pronunciationrecording-desc',
	'version' => '1.1.0',
];

$wgMessagesDirs['PronunciationRecording'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles[ 'PronunciationRecordingAlias' ] = __DIR__ .
	'/PronunciationRecording.alias.php';
$wgSpecialPages[ 'PronunciationRecording' ] = 'SpecialPronunciationRecording';
$wgAutoloadClasses[ 'SpecialPronunciationRecording' ] = __DIR__ .
	'/SpecialPronunciationRecording.php';

$pronunciationRecordingModuleInfo = [
	'localBasePath' => __DIR__ . '/resources',
	'remoteExtPath' => 'PronunciationRecording/resources',
];

// Modules

// "mediawiki.libs.recorderjs" is loaded as WebWorker.
$wgResourceModules['mediawiki.libs.recorderjs'] = [
	'scripts' => '/mediawiki.libs.recorderjs/recorder.js',
] + $pronunciationRecordingModuleInfo;

$wgResourceModules['ext.pronunciationRecording.pronunciationRecorder'] = [
	'scripts' => 'ext.pronunciationRecording.pronunciationRecorder.js',
	'dependencies' => [
		'mediawiki.libs.recorderjs',
		'mediawiki.jqueryMsg',
		'ext.uploadWizard',
	],
	'messages' => [
		'pronunciationrecording-title',
		'pronunciationrecording-toolbar-upload-label',
	],
] + $pronunciationRecordingModuleInfo;

$wgResourceModules['ext.pronunciationRecording.specialPage'] = [
	'scripts' => 'ext.pronunciationRecording.specialPage.js',
	'styles' => 'css/ext.pronunciationRecordingToolbar.css',
	'position' => 'top',
	'dependencies' => [
		'ext.pronunciationRecording.pronunciationRecorder',
		'ext.pronunciationRecording.fileDetails',
		'mediawiki.user',
		'mediawiki.util',
	],
	'messages' => [
		'pronunciationrecording-webaudio-not-supported',
		'pronunciationrecording-upload-publish-succeeded',
		'pronunciationrecording-upload-publish-failed',
		'pronunciationrecording-mic-access-notify',
		'pronunciationrecording-recording-notify',
	],
] + $pronunciationRecordingModuleInfo;

$wgResourceModules['ext.pronunciationRecording.fileDetails'] = [
	'scripts' => 'ext.pronunciationRecording.fileDetails.js',
] + $pronunciationRecordingModuleInfo;
