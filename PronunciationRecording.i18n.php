<?php
/**
 *Internationalisation for Pronunciation Recording Tool
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Rahul21
 */
$messages['en'] = array(
	'pronunciationrecording' => 'Pronunciation Recording Tool',
	'pronunciationrecording-desc' => 'Adds a [[Special:PronunciationRecording|pronunciation recording tool]]',
	'pronunciationrecording-title' => 'Pronunciation recording tool',
	'pronunciationrecording-toolbar-record-label' => 'Record',
	'pronunciationrecording-toolbar-stop-label' => 'Stop',
	'pronunciationrecording-toolbar-clear-label' => 'Clear',
	'pronunciationrecording-toolbar-upload-label' => 'Upload',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio API is not supported for this browser',
	'pronunciationrecording-specialpage-error-nologin' => 'You must be [$1 logged in] to record and upload pronunciations.',
	'pronunciationrecording-upload-publish-succeeded' => 'Recording uploaded successfully: ',
	'pronunciationrecording-upload-publish-failed' => 'Recording was not uploaded',
	'pronunciationrecording-information-label' => 'Information',
	'pronunciationrecording-information-word-label' => 'Word:',
	'pronunciationrecording-information-language-label' => 'Language:',
	'pronunciationrecording-mic-access-notify' => 'Click "Allow" to allow the browser to access your microphone.',
	'pronunciationrecording-recording-notify' => 'Recording....',
	'pronunciationrecording-information-license-prompt' => 'By using PronunciationRecording and clicking {{int:pronunciationrecording-toolbar-upload-label}}, {{GENDER:$1|you}} agree to the following terms for your recording:',
);


/** Message documentation (Message documentation)
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'pronunciationrecording' => '{{doc-special|PronunciationRecording}}',
	'pronunciationrecording-desc' => '{{desc|name=Pronunciation Recording|url=http://www.mediawiki.org/wiki/Extension:PronunciationRecording}}',
	'pronunciationrecording-title' => 'Used as a title message',
	'pronunciationrecording-toolbar-record-label' => 'Label text for the button to start recording.
{{Identical|Record}}',
	'pronunciationrecording-toolbar-stop-label' => 'Label text for the button to stop recording.
{{Identical|Stop}}',
	'pronunciationrecording-toolbar-clear-label' => 'Label text for the button to clear the recording.
{{Identical|Clear}}',
	'pronunciationrecording-toolbar-upload-label' => 'Label text for the button to upload the recording.
{{Identical|Upload}}',
	'pronunciationrecording-webaudio-not-supported' => 'Used as an error message when the WebAudio API is not supported by the browser.',
	'pronunciationrecording-specialpage-error-nologin' => 'Error shown when user is not logged in.

Parameters:
* $1 - URL of login page, with return pointing to [[Special:PronunciationRecording]]',
	'pronunciationrecording-upload-publish-succeeded' => 'Used as a message when the recording is successfully uploaded from the stash.

See also:
* {{msg-mw|Pronunciationrecording-upload-publish-failed}}',
	'pronunciationrecording-upload-publish-failed' => 'Used as a message when the recording failed to be uploaded from the stash.

See also:
* {{msg-mw|Pronunciationrecording-upload-publish-succeeded}}',
	'pronunciationrecording-information-label' => 'Label text for the legend',
	'pronunciationrecording-information-word-label' => 'Label text for the word input field',
	'pronunciationrecording-information-language-label' => 'Label text for the language dropdown list',
	'pronunciationrecording-mic-access-notify' => 'Notifies the user to click "Allow" to allow the browser to get microphone access',
	'pronunciationrecording-recording-notify' => 'Notifies the user that his pronunciation is being recorded',
	'pronunciationrecording-information-license-prompt' => 'Text prompting the user about the license. It is the below the language drop down list.

Parameters:
* $1 - username, for GENDER support',
);

/** Akan (Akan)
 * @author Riches4christ
 */
$messages['ak'] = array(
	'pronunciationrecording-toolbar-stop-label' => 'gyae',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'pronunciationrecording-desc' => 'Amiesta una [[Special:PronunciationRecording|ferramienta pa grabar la pronunciación]]',
	'pronunciationrecording-title' => 'Ferramienta pa grabar la pronunciación',
	'pronunciationrecording-toolbar-record-label' => 'Grabar',
	'pronunciationrecording-toolbar-stop-label' => 'Aparar',
	'pronunciationrecording-toolbar-preview-label' => 'Vista previa',
	'pronunciationrecording-toolbar-clear-label' => 'Llimpiar',
	'pronunciationrecording-toolbar-upload-label' => 'Xubir',
	'pronunciationrecording-webaudio-not-supported' => 'La API WebAudio nun tien encontu nesti navegador.',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 */
$messages['bn'] = array(
	'pronunciationrecording-desc' => 'একটি [[Special:PronunciationRecording|উচ্চারণ রেকর্ডিং সরঞ্জাম]] যোগ',
	'pronunciationrecording-title' => 'উচ্চারণ রেকর্ডিং সরঞ্জাম',
	'pronunciationrecording-toolbar-record-label' => 'রেকর্ড',
	'pronunciationrecording-toolbar-stop-label' => 'বন্ধ',
	'pronunciationrecording-toolbar-preview-label' => 'প্রাকদর্শন',
	'pronunciationrecording-toolbar-clear-label' => 'পরিস্কার',
	'pronunciationrecording-toolbar-upload-label' => 'আপলোড',
	'pronunciationrecording-webaudio-not-supported' => 'ওয়েবঅডিও এপিআই এই ব্রাউজারে সমর্থিত নয়।',
);

/** Breton (brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'pronunciationrecording-toolbar-record-label' => 'Enrollañ',
	'pronunciationrecording-toolbar-stop-label' => 'Paouez',
	'pronunciationrecording-toolbar-preview-label' => 'Rakwelet',
	'pronunciationrecording-toolbar-clear-label' => 'Riñsañ',
	'pronunciationrecording-toolbar-upload-label' => 'Enporzhiañ',
);

/** German (Deutsch)
 * @author Metalhead64
 * @author Purodha
 */
$messages['de'] = array(
	'pronunciationrecording' => 'Ausspracheaufzeichnungswerkzeug',
	'pronunciationrecording-desc' => 'Bringt ein [[Special:PronunciationRecording|Ausspracheaufzeichnungswerkzeug]] ins Wiki',
	'pronunciationrecording-title' => 'Ausspracheaufzeichnungswerkzeug',
	'pronunciationrecording-toolbar-record-label' => 'Aufzeichnen',
	'pronunciationrecording-toolbar-stop-label' => 'Stop',
	'pronunciationrecording-toolbar-preview-label' => 'Vorschau',
	'pronunciationrecording-toolbar-clear-label' => 'Löschen',
	'pronunciationrecording-toolbar-upload-label' => 'Hochladen',
	'pronunciationrecording-webaudio-not-supported' => 'Die WebAudio-API wird für diesen Browser nicht unterstützt',
	'pronunciationrecording-specialpage-error-nologin' => 'Du musst [$1 angemeldet sein], um Aussprachebeispiele aufzeichnen und hochladen zu können.',
	'pronunciationrecording-upload-publish-succeeded' => 'Die Aufnahme wurde erfolgreich hochgeladen',
	'pronunciationrecording-upload-publish-failed' => 'Die Aufnahme wurde nicht hochgeladen',
);

/** Spanish (español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'pronunciationrecording-desc' => 'Añade una [[Special:PronunciationRecording|herramienta para grabar la pronunciación]]',
	'pronunciationrecording-title' => 'Herramienta para grabar la pronunciación',
	'pronunciationrecording-toolbar-record-label' => 'Grabar',
	'pronunciationrecording-toolbar-stop-label' => 'Detener',
	'pronunciationrecording-toolbar-preview-label' => 'Previsualizar',
	'pronunciationrecording-toolbar-clear-label' => 'Borrar',
	'pronunciationrecording-toolbar-upload-label' => 'Cargar',
	'pronunciationrecording-webaudio-not-supported' => 'Este navegador no admite la API WebAudio.',
);

/** Finnish (suomi)
 * @author Nike
 * @author Stryn
 */
$messages['fi'] = array(
	'pronunciationrecording' => 'Ääntämisen tallennustyökalu',
	'pronunciationrecording-desc' => 'Lisää [[Special:PronunciationRecording|ääntämisen tallennustyökalu]]',
	'pronunciationrecording-title' => 'Ääntämisen tallennustyökalu',
	'pronunciationrecording-toolbar-record-label' => 'Äänitä',
	'pronunciationrecording-toolbar-stop-label' => 'Pysäytä',
	'pronunciationrecording-toolbar-preview-label' => 'Esikuuntele',
	'pronunciationrecording-toolbar-clear-label' => 'Tyhjennä',
	'pronunciationrecording-toolbar-upload-label' => 'Lataa',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio-rajapinta ei ole tuettu tässä selaimessa.',
	'pronunciationrecording-upload-publish-succeeded' => 'Nauhoitus tallennettiin',
	'pronunciationrecording-upload-publish-failed' => 'Nauhoitusta ei tallennettu',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'pronunciationrecording-desc' => 'Leggur afturat eitt [[Special:PronunciationRecording|upptøkutól til úttalu]]',
	'pronunciationrecording-title' => 'Upptøkutól til úttalu',
	'pronunciationrecording-toolbar-record-label' => 'Ger upptøku',
	'pronunciationrecording-toolbar-stop-label' => 'Støðga',
	'pronunciationrecording-toolbar-preview-label' => 'Forskoðan',
	'pronunciationrecording-toolbar-clear-label' => 'Reinsa',
	'pronunciationrecording-toolbar-upload-label' => 'Legg út',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio API verður ikki stuðlað á hesum internetkaganum.',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'pronunciationrecording-desc' => 'Ajoute un [[Special:PronunciationRecording|outil d’enregistrement des prononciations]]',
	'pronunciationrecording-title' => 'Outil d’enregistrement des prononciations',
	'pronunciationrecording-toolbar-record-label' => 'Enregistrer',
	'pronunciationrecording-toolbar-stop-label' => 'Arrêter',
	'pronunciationrecording-toolbar-preview-label' => 'Écouter',
	'pronunciationrecording-toolbar-clear-label' => 'Effacer',
	'pronunciationrecording-toolbar-upload-label' => 'Télécharger',
	'pronunciationrecording-webaudio-not-supported' => 'L’API WebAudio n’est pas supportée par ce navigateur',
	'pronunciationrecording-specialpage-error-nologin' => 'Vous devez être [$1 connecté] pour enregistrer et importer des prononciations.',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'pronunciationrecording-desc' => 'Engade unha [[Special:PronunciationRecording|ferramenta para a gravación de pronuncias]]',
	'pronunciationrecording-title' => 'Ferramenta para a gravación de pronuncias',
	'pronunciationrecording-toolbar-record-label' => 'Gravar',
	'pronunciationrecording-toolbar-stop-label' => 'Deter',
	'pronunciationrecording-toolbar-preview-label' => 'Vista previa',
	'pronunciationrecording-toolbar-clear-label' => 'Limpar',
	'pronunciationrecording-toolbar-upload-label' => 'Cargar',
	'pronunciationrecording-webaudio-not-supported' => 'A API WebAudio non está soportada neste navegador.',
	'pronunciationrecording-specialpage-error-nologin' => 'Debe [$1 acceder ao sistema] para gravar e cargar pronuncias.',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'pronunciationrecording' => '発音の録音ツール',
	'pronunciationrecording-desc' => '[[Special:PronunciationRecording|発音の録音ツール]]を追加する',
	'pronunciationrecording-title' => '発音の録音ツール',
	'pronunciationrecording-toolbar-record-label' => '録音',
	'pronunciationrecording-toolbar-stop-label' => '停止',
	'pronunciationrecording-toolbar-preview-label' => 'プレビュー',
	'pronunciationrecording-toolbar-clear-label' => '消去',
	'pronunciationrecording-toolbar-upload-label' => 'アップロード',
	'pronunciationrecording-webaudio-not-supported' => 'ご使用中のブラウザーは WebAudio API に対応していません',
	'pronunciationrecording-specialpage-error-nologin' => '発音を録音してアップロードするには、[$1 ログイン]してください。',
	'pronunciationrecording-upload-publish-succeeded' => '録音したものをアップロードしました',
	'pronunciationrecording-upload-publish-failed' => '録音したものをアップロードできませんでした',
);

/** Korean (한국어)
 * @author Kwj2772
 */
$messages['ko'] = array(
	'pronunciationrecording-desc' => '[[Special:PronunciationRecording|발음 녹음 도구]]를 추가합니다',
	'pronunciationrecording-title' => '발음 녹음 도구',
	'pronunciationrecording-toolbar-record-label' => '녹음',
	'pronunciationrecording-toolbar-stop-label' => '정지',
	'pronunciationrecording-toolbar-preview-label' => '미리 듣기',
	'pronunciationrecording-toolbar-clear-label' => '지우기',
	'pronunciationrecording-toolbar-upload-label' => '올리기',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio API는 이 브라우저에서 지원하지 않습니다.',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'pronunciationrecording-desc' => 'Brängk e [[Special:PronunciationRecording|Wärkzüsch för Ußschprooche opzezeischne]] en et Wikki.',
	'pronunciationrecording-title' => 'Wärkzüsch för de Ußschprooche opzezeischne',
	'pronunciationrecording-toolbar-record-label' => 'Opzeischne',
	'pronunciationrecording-toolbar-stop-label' => 'Aanhallde',
	'pronunciationrecording-toolbar-preview-label' => 'Aanhüüre',
	'pronunciationrecording-toolbar-clear-label' => 'Läddesch maache',
	'pronunciationrecording-toolbar-upload-label' => 'Huhlaade',
	'pronunciationrecording-webaudio-not-supported' => 'Heh dä Brauser kann de <i lang="en" xml:lang="en">WebAudio API</i> nit.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'pronunciationrecording-toolbar-record-label' => 'Ophuelen',
	'pronunciationrecording-toolbar-stop-label' => 'Stopp',
	'pronunciationrecording-toolbar-preview-label' => 'Kucken ouni ze späicheren',
	'pronunciationrecording-toolbar-clear-label' => 'Eidel maachen',
	'pronunciationrecording-toolbar-upload-label' => 'Eroplueden',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio-API gëtt fir dëse Browser net ënnerstëtzt',
	'pronunciationrecording-specialpage-error-nologin' => 'Dir musst [$1 ageloggt] si fir Aussproochen opzehuelen an eropzelueden.',
	'pronunciationrecording-upload-publish-succeeded' => 'Den Enregistrement gouf eropgelueden',
	'pronunciationrecording-upload-publish-failed' => 'Den Enregistrement gouf net eropgelueden',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'pronunciationrecording' => 'Алатка за снимање на изговор',
	'pronunciationrecording-desc' => 'Додава [[Special:PronunciationRecording|алатка за снимање на изговор]]',
	'pronunciationrecording-title' => 'Алатка за снимање на изговор',
	'pronunciationrecording-toolbar-record-label' => 'Снимај',
	'pronunciationrecording-toolbar-stop-label' => 'Запри',
	'pronunciationrecording-toolbar-preview-label' => 'Преслушај',
	'pronunciationrecording-toolbar-clear-label' => 'Отфрли',
	'pronunciationrecording-toolbar-upload-label' => 'Подигни',
	'pronunciationrecording-webaudio-not-supported' => 'Прилогот WebAudio не е поддржан на овој прелистувач',
	'pronunciationrecording-specialpage-error-nologin' => 'Мора да сте [$1 најавени] за да можете да снимате и подигате изговори.',
	'pronunciationrecording-upload-publish-succeeded' => 'Снимката е успешно подигната',
	'pronunciationrecording-upload-publish-failed' => 'Снимката не е подигната',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'pronunciationrecording-desc' => '[[Special:PronunciationRecording|उच्चार ध्वनिमुद्रण साधन]] जोडते',
	'pronunciationrecording-title' => 'उच्चार ध्वनिमुद्रण साधन',
	'pronunciationrecording-toolbar-record-label' => 'ध्वनिमुद्रण करा',
	'pronunciationrecording-toolbar-stop-label' => 'थांबवा',
	'pronunciationrecording-toolbar-preview-label' => 'झलक',
	'pronunciationrecording-toolbar-clear-label' => 'हटवा',
	'pronunciationrecording-toolbar-upload-label' => 'अपभारण करा',
	'pronunciationrecording-webaudio-not-supported' => 'या न्याहाळकाद्वारे जालध्वनी एपीआय सहाय्यीभूत नाही',
);

/** Occitan (occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'pronunciationrecording-desc' => 'Apond una [[Special:PronunciationRecording|aisina d’enregistrament de las prononciacions]]',
	'pronunciationrecording-title' => 'Aisina d’enregistrament de las prononciacions',
	'pronunciationrecording-toolbar-record-label' => 'Enregistrar',
	'pronunciationrecording-toolbar-stop-label' => 'Arrestar',
	'pronunciationrecording-toolbar-preview-label' => 'Escotar',
	'pronunciationrecording-toolbar-clear-label' => 'Escafar',
	'pronunciationrecording-toolbar-upload-label' => 'Telecargar',
	'pronunciationrecording-webaudio-not-supported' => 'L’API WebAudio es pas suportada per aqueste navigador',
);

/** Portuguese (português)
 * @author Cainamarques
 * @author Fúlvio
 */
$messages['pt'] = array(
	'pronunciationrecording-desc' => 'Adiciona uma [[Special:PronunciationRecording|ferramenta de gravação de pronúncias]]',
	'pronunciationrecording-title' => 'Ferramenta de gravação de pronúncias',
	'pronunciationrecording-toolbar-record-label' => 'Gravar',
	'pronunciationrecording-toolbar-stop-label' => 'Parar',
	'pronunciationrecording-toolbar-preview-label' => 'Antever',
	'pronunciationrecording-toolbar-clear-label' => 'Limpar',
	'pronunciationrecording-toolbar-upload-label' => 'Carregar',
	'pronunciationrecording-webaudio-not-supported' => 'A API do WebAudio não é suportada por este navegador.',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Cainamarques
 * @author Luckas
 */
$messages['pt-br'] = array(
	'pronunciationrecording-desc' => 'Adiciona uma [[Special:PronunciationRecording|ferramenta de gravação de pronúncias]]',
	'pronunciationrecording-title' => 'Ferramenta de gravação de pronúncias',
	'pronunciationrecording-toolbar-record-label' => 'Gravar',
	'pronunciationrecording-toolbar-stop-label' => 'Parar',
	'pronunciationrecording-toolbar-preview-label' => 'Pré-visualizar',
	'pronunciationrecording-toolbar-clear-label' => 'Limpar',
	'pronunciationrecording-toolbar-upload-label' => 'Enviar',
	'pronunciationrecording-webaudio-not-supported' => 'A API do WebAudio não é suportada por este navegador.',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'pronunciationrecording-desc' => "Aggiunge 'nu [[Special:PronunciationRecording|strumende pa reggistrazzione d'a pronunge]]",
	'pronunciationrecording-title' => "Strumende pa reggistrazzione d'a pronunge",
	'pronunciationrecording-toolbar-record-label' => 'Reggistre',
	'pronunciationrecording-toolbar-stop-label' => 'Stuèppe',
	'pronunciationrecording-toolbar-preview-label' => 'Andeprime',
	'pronunciationrecording-toolbar-clear-label' => 'Pulizze',
	'pronunciationrecording-toolbar-upload-label' => 'Careche',
	'pronunciationrecording-webaudio-not-supported' => "API WebAudio non g'è supportate pe stu browser",
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'pronunciationrecording-desc' => '[[Special:PronunciationRecording|උච්චාරණය පටිගත කිරීමේ මෙවලම]] එක් කරයි',
);

/** Tamil (தமிழ்)
 * @author ElangoRamanujam
 * @author Sank
 */
$messages['ta'] = array(
	'pronunciationrecording-title' => 'உச்சரிப்பை பதிவிடும் கருவி',
	'pronunciationrecording-toolbar-record-label' => 'பதிவிடுக',
	'pronunciationrecording-toolbar-stop-label' => 'நிறுத்துக',
	'pronunciationrecording-toolbar-preview-label' => 'முன்பார்வை',
	'pronunciationrecording-toolbar-clear-label' => 'நீக்கு',
	'pronunciationrecording-toolbar-upload-label' => 'பதிவேற்றுக',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'pronunciationrecording-toolbar-preview-label' => 'మునుజూపు',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 */
$messages['uk'] = array(
	'pronunciationrecording' => 'Інструмент запису вимови',
	'pronunciationrecording-desc' => 'Додає [[Special:PronunciationRecording|інструмент запису вимови]]',
	'pronunciationrecording-title' => 'Інструмент запису вимови',
	'pronunciationrecording-toolbar-record-label' => 'Запис',
	'pronunciationrecording-toolbar-stop-label' => 'Стоп',
	'pronunciationrecording-toolbar-preview-label' => 'Перегляд',
	'pronunciationrecording-toolbar-clear-label' => 'Очистити',
	'pronunciationrecording-toolbar-upload-label' => 'Вивантажити',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio API не підтримується для цього веб-переглядача',
	'pronunciationrecording-specialpage-error-nologin' => 'Ви повинні [$1  увійти в систему] для запису і завантаження вимови.',
	'pronunciationrecording-upload-publish-succeeded' => 'Запис успішно завантажено',
	'pronunciationrecording-upload-publish-failed' => 'Запис не було завантажено',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'pronunciationrecording-title' => 'ארויסרעדן רעקארדירן געצייג',
	'pronunciationrecording-toolbar-record-label' => 'רעקארדירן',
	'pronunciationrecording-toolbar-stop-label' => 'אויפהערן',
	'pronunciationrecording-toolbar-preview-label' => 'פֿאראויסשטעלונג',
	'pronunciationrecording-toolbar-clear-label' => 'רייניקן',
	'pronunciationrecording-toolbar-upload-label' => 'אַרויפֿלאָדן',
);
