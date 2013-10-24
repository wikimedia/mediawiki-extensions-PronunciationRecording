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
	'pronunciationrecording-upload-publish-succeeded' => 'Recording uploaded successfully:',
	'pronunciationrecording-upload-publish-failed' => 'Recording was not uploaded',
	'pronunciationrecording-information-label' => 'Information',
	'pronunciationrecording-information-word-label' => 'Word:',
	'pronunciationrecording-information-language-label' => 'Language:',
	'pronunciationrecording-mic-access-notify' => 'Click "Allow" to allow the browser to access your microphone.',
	'pronunciationrecording-recording-notify' => 'Recording...',
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

Followed by " " and a link pointing to the file.

See also:
* {{msg-mw|Pronunciationrecording-upload-publish-failed}}',
	'pronunciationrecording-upload-publish-failed' => 'Used as a message when the recording failed to be uploaded from the stash.

See also:
* {{msg-mw|Pronunciationrecording-upload-publish-succeeded}}',
	'pronunciationrecording-information-label' => 'Label text for the legend.
{{Identical|Information}}',
	'pronunciationrecording-information-word-label' => 'Label text for the word input field.
{{Identical|Word}}',
	'pronunciationrecording-information-language-label' => 'Label text for the language dropdown list.
{{Identical|Language}}',
	'pronunciationrecording-mic-access-notify' => 'Notifies the user to click "Allow" to allow the browser to get microphone access',
	'pronunciationrecording-recording-notify' => 'Notifies the user that his pronunciation is being recorded',
	'pronunciationrecording-information-license-prompt' => 'Text prompting the user about the license. It is the below the language drop down list.

Refers to {{msg-mw|Pronunciationrecording-toolbar-upload-label}}.

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
	'pronunciationrecording' => 'Ferramienta pa grabar la pronunciación',
	'pronunciationrecording-desc' => 'Amiesta una [[Special:PronunciationRecording|ferramienta pa grabar la pronunciación]]',
	'pronunciationrecording-title' => 'Ferramienta pa grabar la pronunciación',
	'pronunciationrecording-toolbar-record-label' => 'Grabar',
	'pronunciationrecording-toolbar-stop-label' => 'Aparar',
	'pronunciationrecording-toolbar-clear-label' => 'Llimpiar',
	'pronunciationrecording-toolbar-upload-label' => 'Xubir',
	'pronunciationrecording-webaudio-not-supported' => 'La API WebAudio nun tien encontu nesti navegador.',
	'pronunciationrecording-specialpage-error-nologin' => "Tien d'[$1 aniciar sesión] pa grabar y xubir pronunciaciones.",
	'pronunciationrecording-upload-publish-succeeded' => 'Grabación xubida correutamente:',
	'pronunciationrecording-upload-publish-failed' => 'La grabación nun se xubió',
	'pronunciationrecording-information-label' => 'Información',
	'pronunciationrecording-information-word-label' => 'Pallabra:',
	'pronunciationrecording-information-language-label' => 'Llingua:',
	'pronunciationrecording-mic-access-notify' => 'Calque "Permitir" pa permitir l\'accesu del navegador al micrófonu.',
	'pronunciationrecording-recording-notify' => 'Grabando...',
	'pronunciationrecording-information-license-prompt' => 'Al usar PronunciationRecording y calcar en "{{int:pronunciationrecording-toolbar-upload-label}}", {{GENDER:$1|acepta}} los siguientes términos pa la so grabación:',
);

/** Bengali (বাংলা)
 * @author Aftab1995
 */
$messages['bn'] = array(
	'pronunciationrecording-desc' => 'একটি [[Special:PronunciationRecording|উচ্চারণ রেকর্ডিং সরঞ্জাম]] যোগ',
	'pronunciationrecording-title' => 'উচ্চারণ রেকর্ডিং সরঞ্জাম',
	'pronunciationrecording-toolbar-record-label' => 'রেকর্ড',
	'pronunciationrecording-toolbar-stop-label' => 'বন্ধ',
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
	'pronunciationrecording-toolbar-clear-label' => 'Riñsañ',
	'pronunciationrecording-toolbar-upload-label' => 'Enporzhiañ',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'pronunciationrecording-toolbar-clear-label' => 'ЦӀанъян',
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
	'pronunciationrecording-toolbar-clear-label' => 'Löschen',
	'pronunciationrecording-toolbar-upload-label' => 'Hochladen',
	'pronunciationrecording-webaudio-not-supported' => 'Die WebAudio-API wird für diesen Browser nicht unterstützt',
	'pronunciationrecording-specialpage-error-nologin' => 'Du musst [$1 angemeldet sein], um Aussprachebeispiele aufzeichnen und hochladen zu können.',
	'pronunciationrecording-upload-publish-succeeded' => 'Die Aufnahme wurde erfolgreich hochgeladen:',
	'pronunciationrecording-upload-publish-failed' => 'Die Aufnahme wurde nicht hochgeladen',
	'pronunciationrecording-information-label' => 'Information',
	'pronunciationrecording-information-word-label' => 'Wort:',
	'pronunciationrecording-information-language-label' => 'Sprache:',
	'pronunciationrecording-mic-access-notify' => 'Klicke auf „Erlauben“, um dem Browser den Zugriff auf dein Mikrofon zu gestatten.',
	'pronunciationrecording-recording-notify' => 'Aufnahme …',
	'pronunciationrecording-information-license-prompt' => 'Mit der Verwendung von PronunciationRecording und dem Klick auf „{{int:pronunciationrecording-toolbar-upload-label}}“ stimmst {{GENDER:$1|du}} den folgenden Bedingungen für deine Aufnahme zu:',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Ovruni
 */
$messages['es'] = array(
	'pronunciationrecording-desc' => 'Añade una [[Special:PronunciationRecording|herramienta para grabar la pronunciación]]',
	'pronunciationrecording-title' => 'Herramienta para grabar la pronunciación',
	'pronunciationrecording-toolbar-record-label' => 'Grabar',
	'pronunciationrecording-toolbar-stop-label' => 'Detener',
	'pronunciationrecording-toolbar-clear-label' => 'Borrar',
	'pronunciationrecording-toolbar-upload-label' => 'Cargar',
	'pronunciationrecording-webaudio-not-supported' => 'Este navegador no admite la API WebAudio.',
	'pronunciationrecording-information-label' => 'información',
	'pronunciationrecording-information-word-label' => 'Palabra:',
	'pronunciationrecording-information-language-label' => 'Idioma:',
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
	'pronunciationrecording-toolbar-clear-label' => 'Tyhjennä',
	'pronunciationrecording-toolbar-upload-label' => 'Lataa',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio-rajapinta ei ole tuettu tässä selaimessa.',
	'pronunciationrecording-upload-publish-succeeded' => 'Nauhoitus tallennettiin', # Fuzzy
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
	'pronunciationrecording-toolbar-clear-label' => 'Reinsa',
	'pronunciationrecording-toolbar-upload-label' => 'Legg út',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio API verður ikki stuðlað á hesum internetkaganum.',
);

/** French (français)
 * @author Gomoko
 */
$messages['fr'] = array(
	'pronunciationrecording' => 'Outil d’enregistrement de prononciation',
	'pronunciationrecording-desc' => 'Ajoute un [[Special:PronunciationRecording|outil d’enregistrement des prononciations]]',
	'pronunciationrecording-title' => 'Outil d’enregistrement des prononciations',
	'pronunciationrecording-toolbar-record-label' => 'Enregistrer',
	'pronunciationrecording-toolbar-stop-label' => 'Arrêter',
	'pronunciationrecording-toolbar-clear-label' => 'Effacer',
	'pronunciationrecording-toolbar-upload-label' => 'Télécharger',
	'pronunciationrecording-webaudio-not-supported' => 'L’API WebAudio n’est pas supportée par ce navigateur',
	'pronunciationrecording-specialpage-error-nologin' => 'Vous devez être [$1 connecté] pour enregistrer et importer des prononciations.',
	'pronunciationrecording-upload-publish-succeeded' => 'Enregistrement bien importé :',
	'pronunciationrecording-upload-publish-failed' => 'L’enregistrement n’a pas été importé',
	'pronunciationrecording-information-label' => 'Information',
	'pronunciationrecording-information-word-label' => 'Mot :',
	'pronunciationrecording-information-language-label' => 'Langue :',
	'pronunciationrecording-mic-access-notify' => 'Cliquez sur « Autoriser » pour permettre au navigateur d’accéder à votre microphone.',
	'pronunciationrecording-recording-notify' => 'Enregistrement en cours…',
	'pronunciationrecording-information-license-prompt' => 'En utilisant PronunciationRecording  et en cliquant sur {{int:pronunciationrecording-toolbar-upload-label}}, {{GENDER:$1|vous}} acceptez les conditions suivantes pour votre enregistrement :',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'pronunciationrecording' => 'Ferramenta para a gravación de pronuncias',
	'pronunciationrecording-desc' => 'Engade unha [[Special:PronunciationRecording|ferramenta para a gravación de pronuncias]]',
	'pronunciationrecording-title' => 'Ferramenta para a gravación de pronuncias',
	'pronunciationrecording-toolbar-record-label' => 'Gravar',
	'pronunciationrecording-toolbar-stop-label' => 'Deter',
	'pronunciationrecording-toolbar-clear-label' => 'Limpar',
	'pronunciationrecording-toolbar-upload-label' => 'Cargar',
	'pronunciationrecording-webaudio-not-supported' => 'A API WebAudio non está soportada neste navegador.',
	'pronunciationrecording-specialpage-error-nologin' => 'Debe [$1 acceder ao sistema] para gravar e cargar pronuncias.',
	'pronunciationrecording-upload-publish-succeeded' => 'A gravación cargouse correctamente:',
	'pronunciationrecording-upload-publish-failed' => 'Non se cargou a gravación',
	'pronunciationrecording-information-label' => 'Información',
	'pronunciationrecording-information-word-label' => 'Palabra:',
	'pronunciationrecording-information-language-label' => 'Lingua:',
	'pronunciationrecording-mic-access-notify' => 'Prema en "Permitir" para que o navegador poida acceder ao seu micrófono.',
	'pronunciationrecording-recording-notify' => 'Gravando...',
	'pronunciationrecording-information-license-prompt' => 'Ao usar a gravación de pronuncias e premer en "{{int:pronunciationrecording-toolbar-upload-label}}", {{GENDER:$1|acepta}} os seguintes termos para a súa gravación:',
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
	'pronunciationrecording-toolbar-clear-label' => '消去',
	'pronunciationrecording-toolbar-upload-label' => 'アップロード',
	'pronunciationrecording-webaudio-not-supported' => 'ご使用中のブラウザーは WebAudio API に対応していません',
	'pronunciationrecording-specialpage-error-nologin' => '発音を録音してアップロードするには、[$1 ログイン]してください。',
	'pronunciationrecording-upload-publish-succeeded' => '録音したものをアップロードしました:',
	'pronunciationrecording-upload-publish-failed' => '録音したものをアップロードできませんでした',
	'pronunciationrecording-information-label' => '情報',
	'pronunciationrecording-information-word-label' => '単語:',
	'pronunciationrecording-information-language-label' => '言語:',
	'pronunciationrecording-mic-access-notify' => 'ブラウザーがマイクにアクセスできるように「許可」をクリックしてください',
	'pronunciationrecording-recording-notify' => '録音中...',
	'pronunciationrecording-information-license-prompt' => '発音録音ツールを使用し{{int:pronunciationrecording-toolbar-upload-label}}をクリックすることで、{{GENDER:$1|あなた}}は録音物について以下の規約に同意したと見なされます:',
);

/** Korean (한국어)
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'pronunciationrecording' => '발음 녹음 도구',
	'pronunciationrecording-desc' => '[[Special:PronunciationRecording|발음 녹음 도구]]를 추가합니다',
	'pronunciationrecording-title' => '발음 녹음 도구',
	'pronunciationrecording-toolbar-record-label' => '녹음',
	'pronunciationrecording-toolbar-stop-label' => '정지',
	'pronunciationrecording-toolbar-clear-label' => '지우기',
	'pronunciationrecording-toolbar-upload-label' => '올리기',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio API는 이 브라우저에서 지원하지 않습니다.',
	'pronunciationrecording-specialpage-error-nologin' => '발음을 녹음하고 올리려면 [$1 로그인]해야 합니다.',
	'pronunciationrecording-upload-publish-succeeded' => '녹음을 성공적으로 올렸습니다:',
	'pronunciationrecording-upload-publish-failed' => '녹음된 파일이 올려지지 않았습니다',
	'pronunciationrecording-information-label' => '정보',
	'pronunciationrecording-information-word-label' => '단어:',
	'pronunciationrecording-information-language-label' => '언어:',
	'pronunciationrecording-mic-access-notify' => '브라우저가 마이크에 접근할 수 있도록 "허용"을 클릭하세요.',
	'pronunciationrecording-recording-notify' => '녹음 중...',
	'pronunciationrecording-information-license-prompt' => '발음 녹음 기능을 사용하여 {{int:pronunciationrecording-toolbar-upload-label}}를 클릭하면, {{GENDER:$1|당신}}은 녹음에 대해 다음 조건에 동의하게 됩니다:',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'pronunciationrecording-desc' => 'Brängk e [[Special:PronunciationRecording|Wärkzüsch för Ußschprooche opzezeischne]] en et Wikki.',
	'pronunciationrecording-title' => 'Wärkzüsch för de Ußschprooche opzezeischne',
	'pronunciationrecording-toolbar-record-label' => 'Opzeischne',
	'pronunciationrecording-toolbar-stop-label' => 'Aanhallde',
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
	'pronunciationrecording-toolbar-clear-label' => 'Eidel maachen',
	'pronunciationrecording-toolbar-upload-label' => 'Eroplueden',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio-API gëtt fir dëse Browser net ënnerstëtzt',
	'pronunciationrecording-specialpage-error-nologin' => 'Dir musst [$1 ageloggt] si fir Aussproochen opzehuelen an eropzelueden.',
	'pronunciationrecording-upload-publish-succeeded' => 'Den Enregistrement gouf eropgelueden',
	'pronunciationrecording-upload-publish-failed' => 'Den Enregistrement gouf net eropgelueden',
	'pronunciationrecording-information-label' => 'Informatioun',
	'pronunciationrecording-information-word-label' => 'Wuert:',
	'pronunciationrecording-information-language-label' => 'Sprooch:',
	'pronunciationrecording-recording-notify' => 'Ophuelen...',
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
	'pronunciationrecording-toolbar-clear-label' => 'Отфрли',
	'pronunciationrecording-toolbar-upload-label' => 'Подигни',
	'pronunciationrecording-webaudio-not-supported' => 'Прилогот WebAudio не е поддржан на овој прелистувач',
	'pronunciationrecording-specialpage-error-nologin' => 'Мора да сте [$1 најавени] за да можете да снимате и подигате изговори.',
	'pronunciationrecording-upload-publish-succeeded' => 'Снимката е успешно подигната:',
	'pronunciationrecording-upload-publish-failed' => 'Снимката не е подигната',
	'pronunciationrecording-information-label' => 'Информации',
	'pronunciationrecording-information-word-label' => 'Збор:',
	'pronunciationrecording-information-language-label' => 'Јазик:',
	'pronunciationrecording-mic-access-notify' => 'Стиснете на „Дозволи“ за да му дадете пристап на прелистувачот до вашиот микрофон.',
	'pronunciationrecording-recording-notify' => 'Снимам....',
	'pronunciationrecording-information-license-prompt' => 'Користејќи го снимачот на изговор и стискајќи на {{int:pronunciationrecording-toolbar-upload-label}}, {{GENDER:$1|се}} согласувате снименото да се води според следниве услови:',
);

/** Malayalam (മലയാളം)
 * @author Santhosh.thottingal
 */
$messages['ml'] = array(
	'pronunciationrecording-information-word-label' => 'വാക്ക്:',
	'pronunciationrecording-information-language-label' => 'ഭാഷ:',
	'pronunciationrecording-recording-notify' => 'റെക്കോഡിങ്ങ്...',
);

/** Marathi (मराठी)
 * @author V.narsikar
 */
$messages['mr'] = array(
	'pronunciationrecording-desc' => '[[Special:PronunciationRecording|उच्चार ध्वनिमुद्रण साधन]] जोडते',
	'pronunciationrecording-title' => 'उच्चार ध्वनिमुद्रण साधन',
	'pronunciationrecording-toolbar-record-label' => 'ध्वनिमुद्रण करा',
	'pronunciationrecording-toolbar-stop-label' => 'थांबवा',
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
	'pronunciationrecording-toolbar-clear-label' => 'Escafar',
	'pronunciationrecording-toolbar-upload-label' => 'Telecargar',
	'pronunciationrecording-webaudio-not-supported' => 'L’API WebAudio es pas suportada per aqueste navigador',
);

/** Polish (polski)
 * @author Chrumps
 */
$messages['pl'] = array(
	'pronunciationrecording-information-word-label' => 'Słowo:',
	'pronunciationrecording-information-language-label' => 'Język:',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'pronunciationrecording-information-label' => 'مالومات',
	'pronunciationrecording-information-language-label' => 'ژبه:',
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
	'pronunciationrecording-toolbar-clear-label' => 'Limpar',
	'pronunciationrecording-toolbar-upload-label' => 'Enviar',
	'pronunciationrecording-webaudio-not-supported' => 'A API do WebAudio não é suportada por este navegador.',
	'pronunciationrecording-information-label' => 'Informação',
	'pronunciationrecording-information-word-label' => 'Palavra:',
	'pronunciationrecording-information-language-label' => 'Língua:',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'pronunciationrecording' => "Strumende pa reggistrazzione d'a pronunge",
	'pronunciationrecording-desc' => "Aggiunge 'nu [[Special:PronunciationRecording|strumende pa reggistrazzione d'a pronunge]]",
	'pronunciationrecording-title' => "Strumende pa reggistrazzione d'a pronunge",
	'pronunciationrecording-toolbar-record-label' => 'Reggistre',
	'pronunciationrecording-toolbar-stop-label' => 'Stuèppe',
	'pronunciationrecording-toolbar-clear-label' => 'Pulizze',
	'pronunciationrecording-toolbar-upload-label' => 'Careche',
	'pronunciationrecording-webaudio-not-supported' => "API WebAudio non g'è supportate pe stu browser",
	'pronunciationrecording-information-label' => "'Mbormaziune",
	'pronunciationrecording-information-word-label' => 'Parole:',
	'pronunciationrecording-information-language-label' => 'Lènghe:',
);

/** Russian (русский)
 * @author Okras
 */
$messages['ru'] = array(
	'pronunciationrecording' => 'Инструмент для записи произношения',
	'pronunciationrecording-desc' => 'Добавляет [[Special:PronunciationRecording|инструмент для записи произношения]]',
	'pronunciationrecording-title' => 'Инструмент для записи произношения',
	'pronunciationrecording-toolbar-record-label' => 'Запись',
	'pronunciationrecording-toolbar-stop-label' => 'Остановить',
	'pronunciationrecording-toolbar-clear-label' => 'Очистить',
	'pronunciationrecording-toolbar-upload-label' => 'Загрузить',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio API не поддерживается этим браузером',
	'pronunciationrecording-specialpage-error-nologin' => 'Вы должны [$1  войти в систему] для записи и загрузки произношения.',
	'pronunciationrecording-upload-publish-succeeded' => 'Запись успешно загружена:',
	'pronunciationrecording-upload-publish-failed' => 'Запись не была загружена',
	'pronunciationrecording-information-label' => 'Информация',
	'pronunciationrecording-information-word-label' => 'Слово:',
	'pronunciationrecording-information-language-label' => 'Язык:',
	'pronunciationrecording-mic-access-notify' => 'Нажмите кнопку «Разрешить», чтобы разрешить браузеру доступ к вашему микрофону.',
	'pronunciationrecording-recording-notify' => 'Запись…',
	'pronunciationrecording-information-license-prompt' => 'Используя «Запись произношения» и нажимая кнопку {{int:pronunciationrecording-toolbar-upload-label}}, {{GENDER:$1|вы}} соглашаетесь со следующими условиями для вашей записи:',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'pronunciationrecording-desc' => '[[Special:PronunciationRecording|උච්චාරණය පටිගත කිරීමේ මෙවලම]] එක් කරයි',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 */
$messages['sl'] = array(
	'pronunciationrecording' => 'Orodje za snemanje izgovarjav',
	'pronunciationrecording-desc' => 'Doda [[Special:PronunciationRecording|orodje za snemanje izgovorjave]]',
	'pronunciationrecording-title' => 'Orodje za snemanje izgovorjave',
	'pronunciationrecording-toolbar-record-label' => 'Snemaj',
	'pronunciationrecording-toolbar-stop-label' => 'Ustavi',
	'pronunciationrecording-toolbar-clear-label' => 'Počisti',
	'pronunciationrecording-toolbar-upload-label' => 'Naloži',
	'pronunciationrecording-webaudio-not-supported' => 'Ta brskalnik ne podpira WebAudio API',
	'pronunciationrecording-specialpage-error-nologin' => 'Za snemanje in nalaganje izgovarjav morate biti [$1 prijavljeni].',
	'pronunciationrecording-upload-publish-succeeded' => 'Posnetek se je uspešno naložil:',
	'pronunciationrecording-upload-publish-failed' => 'Posnetek se ni naložil',
	'pronunciationrecording-information-label' => 'Informacije',
	'pronunciationrecording-information-word-label' => 'Beseda:',
	'pronunciationrecording-information-language-label' => 'Jezik:',
	'pronunciationrecording-mic-access-notify' => 'Kliknite »Dovolim«, da bo brskalnik lahko dostopal do vašega mikrofona.',
	'pronunciationrecording-recording-notify' => 'Snemanje ...',
	'pronunciationrecording-information-license-prompt' => 'Z uporabo orodja PronunciationRecording in klikom  {{int:pronunciationrecording-toolbar-upload-label}}, se {{GENDER:$1|strinjate}} z naslednjimi pogoji:',
);

/** Swedish (svenska)
 * @author Jopparn
 */
$messages['sv'] = array(
	'pronunciationrecording' => 'Inspelningsverktyget för uttal',
	'pronunciationrecording-desc' => 'Lägger till en [[Special:PronunciationRecording|uttal|inspelningsverktyg]]',
	'pronunciationrecording-title' => 'Inspelningsverktyget för uttal',
	'pronunciationrecording-toolbar-record-label' => 'Spela in',
	'pronunciationrecording-toolbar-stop-label' => 'Stopp',
	'pronunciationrecording-toolbar-clear-label' => 'Rensa',
	'pronunciationrecording-toolbar-upload-label' => 'Uppladdning',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio API stöds inte för denna webbläsare',
	'pronunciationrecording-specialpage-error-nologin' => 'Du måste vara [$1 inloggad] att spela in och ladda upp uttal.',
	'pronunciationrecording-upload-publish-succeeded' => 'Inspelning framgångsrikt uppladdad:',
	'pronunciationrecording-upload-publish-failed' => 'Inspelningen laddades inte upp',
	'pronunciationrecording-information-label' => 'Information',
	'pronunciationrecording-information-word-label' => 'ORd:',
	'pronunciationrecording-information-language-label' => 'Språk:',
	'pronunciationrecording-mic-access-notify' => 'Klicka på "Tillåt" för att tillåta webbläsaren att komma åt din mikrofon.',
	'pronunciationrecording-recording-notify' => 'Spelar in...',
	'pronunciationrecording-information-license-prompt' => 'Genom att använda PronunciationRecording och klicka på {{int:pronunciationrecording-toolbar-upload-label}},accepterar {{GENDER:$1|du}} följande villkor för din inspelning:',
);

/** Tamil (தமிழ்)
 * @author ElangoRamanujam
 * @author Sank
 * @author கௌசிக் பிரபு
 */
$messages['ta'] = array(
	'pronunciationrecording-title' => 'உச்சரிப்பை பதிவிடும் கருவி',
	'pronunciationrecording-toolbar-record-label' => 'பதிவிடுக',
	'pronunciationrecording-toolbar-stop-label' => 'நிறுத்துக',
	'pronunciationrecording-toolbar-clear-label' => 'நீக்கு',
	'pronunciationrecording-toolbar-upload-label' => 'பதிவேற்றுக',
	'pronunciationrecording-information-label' => 'தகவல்',
	'pronunciationrecording-information-language-label' => 'மொழி:',
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
	'pronunciationrecording-toolbar-clear-label' => 'Очистити',
	'pronunciationrecording-toolbar-upload-label' => 'Вивантажити',
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio API не підтримується для цього веб-переглядача',
	'pronunciationrecording-specialpage-error-nologin' => 'Ви повинні [$1  увійти в систему] для запису і завантаження вимови.',
	'pronunciationrecording-upload-publish-succeeded' => 'Запис успішно завантажено:',
	'pronunciationrecording-upload-publish-failed' => 'Запис не було завантажено',
	'pronunciationrecording-information-label' => 'Інформація',
	'pronunciationrecording-information-word-label' => 'Слово:',
	'pronunciationrecording-information-language-label' => 'Мова:',
	'pronunciationrecording-mic-access-notify' => 'Натисніть кнопку "Дозволити" аби дозволити браузер для доступу до вашого мікрофона.',
	'pronunciationrecording-recording-notify' => 'Запис...',
	'pronunciationrecording-information-license-prompt' => 'За допомогою PronunciationRecording і натиснувши  {{int:pronunciationrecording-toolbar-upload-label}},   {{GENDER:$1| ви}} погоджуєтеся з наступними умовами для вашого запису:',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'pronunciationrecording-title' => 'ארויסרעדן רעקארדירן געצייג',
	'pronunciationrecording-toolbar-record-label' => 'רעקארדירן',
	'pronunciationrecording-toolbar-stop-label' => 'אויפהערן',
	'pronunciationrecording-toolbar-clear-label' => 'רייניקן',
	'pronunciationrecording-toolbar-upload-label' => 'אַרויפֿלאָדן',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Liuxinyu970226
 */
$messages['zh-hans'] = array(
	'pronunciationrecording-webaudio-not-supported' => 'WebAudio API与此浏览器不兼容',
	'pronunciationrecording-specialpage-error-nologin' => '您必须[$1 登录]以录制和上传录音。',
	'pronunciationrecording-information-label' => '信息',
	'pronunciationrecording-information-word-label' => '字：',
	'pronunciationrecording-information-language-label' => '语言：',
	'pronunciationrecording-mic-access-notify' => '点击“同意”以允许浏览器使用您的麦克风。',
	'pronunciationrecording-recording-notify' => '录音......',
	'pronunciationrecording-information-license-prompt' => '通过使用录音功能并点击{{int:pronunciationrecording-toolbar-upload-label}}，{{GENDER:$1|您}}同意将录音按下述之条款授权：',
);
