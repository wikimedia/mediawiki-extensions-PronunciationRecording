<?php

if ( !defined( 'MEDIAWIKI' ) ) die( 'Invalid entry point.' );

$wgExtensionCredits[ 'specialpage' ][] = array(
	'path' => __FILE__,
	'name' => 'PronunciationRecording',
	'author' => array(
		'Rahul Maliakkal',
		'Matthew Flaschen',
		'Michael Dale',
	),
	'url' => 'https://www.mediawiki.org/wiki/Extension:PronunciationRecording',
	'descriptionmsg' => 'pronunciationrecording-desc',
	'version' => '1',
);

$wgExtensionMessagesFiles[ 'PronunciationRecording' ] = __DIR__ . '/PronunciationRecording.i18n.php';
$wgExtensionMessagesFiles[ 'PronunciationRecordingAlias' ] = __DIR__ . '/PronunciationRecording.alias.php';
$wgSpecialPages[ 'PronunciationRecording' ] = 'SpecialPronunciationRecording';
$wgAutoloadClasses[ 'SpecialPronunciationRecording' ] = __DIR__ . '/SpecialPronunciationRecording.php';

$pronunciationRecordingModuleInfo = array(
	'localBasePath' => __DIR__ . '/resources',
	'remoteExtPath' => 'PronunciationRecording/resources',
);


//Modules

//"mediawiki.libs.recorderjs" is loaded as WebWorker.
$wgResourceModules['mediawiki.libs.recorderjs'] = array(
        'scripts' => '/mediawiki.libs.recorderjs/recorder.js',
) + $pronunciationRecordingModuleInfo;

$wgResourceModules['ext.pronunciationRecording.pronunciationRecorder'] = array(
	'scripts' => 'ext.pronunciationRecording.pronunciationRecorder.js',
	'dependencies' => array(
		'mediawiki.libs.recorderjs',
		'mediawiki.jqueryMsg',
	),
	'messages' => array(
		'pronunciationrecording-webaudio-not-supported',
		'pronunciationrecording-toolbar-upload-label',
	),
) + $pronunciationRecordingModuleInfo;

$wgResourceModules['ext.pronunciationRecording.specialPage'] = array(
	'scripts' => 'ext.pronunciationRecording.specialPage.js',
	'styles' => 'css/ext.pronunciationRecordingToolbar.css',
	'position' => 'top',
	'dependencies' => 'ext.pronunciationRecording.pronunciationRecorder',
) + $pronunciationRecordingModuleInfo;
