<?php
/**
*
* pastebin [German]
*
* @package language
* @version 0.1.3
* Translator Mahony http://www.sportschulekang.de and http://nationsofmetal.na.funpic.de/forum/
* @copyright (c) 2007 eviL3
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'PASTEBIN_COPY_PASTE'				=> 'Quellcode',
	'PASTEBIN_COPY_PASTE_EXPLAIN'		=> 'Hier kannst du den Code kopieren und ihn in deinen bevorzugten Editor einfügen.',
	'PASTEBIN_SELECT_CODE'				=> 'Quellcode markieren',

	'PASTEBIN_ELLIPSIS'					=> '…',

	'PASTEBIN_DELETE_SNIPPET'			=> 'Eintrag löschen',
	'PASTEBIN_DELETE_SNIPPET_CONFIRM'	=> 'Soll der Eintrag mit dem Titel “%s” wirklich gelöscht werden? Diese Aktion kann nicht rückgängig gemacht werden.',
	'PASTEBIN_DELETE_SNIPPET_EXPLAIN'	=> 'Löscht den Eintrag aus der Datenbank. Diese Aktion kann nicht rückgängig gemacht werden.',
	'PASTEBIN_DOWNLOAD_SNIPPET'			=> 'Eintrag herunterladen',
	'PASTEBIN_DOWNLOAD_SNIPPET_EXPLAIN'	=> 'Alternativ kannst du den gesamten Eintrag auch als Datei %sherunterladen%s.',

	'DISALLOWED_EXTENSION'	=> 'Die Dateierweiterung %s ist nicht erlaubt',

	'PASTEBIN_ERR_NO_BODY'				=> 'Du hast keinen Code eingefügt oder keine gültige Datei zum Upload ausgewählt.',
	'PASTEBIN_ERR_NO_TITLE'				=> 'Du hast keinen Titel für den Eintrag eingegeben.',
	'PASTEBIN_ERR_NO_DESC'				=> 'Du hast keine Beschreibung für den Eintrag eingegeben.',

	'PASTEBIN_HIGHLIGHT_LANG'			=> 'Syntaxhervorhebung',

	'PASTEBIN_LATEST_SNIPPETS'			=> 'Letzte Einträge',

	'PASTEBIN_MODERATE_SNIPPET'			=> 'Eintrag bearbeiten',
	'PASTEBIN_MODERATE_SNIPPET_EXPLAIN'	=> 'Eintrag bearbeiten oder löschen.',

	'PASTEBIN_NO_VALID_SNIPPET'			=> 'Du hast keinen Eintrag ausgewählt.',
	'PASTEBIN_NO_SNIPPETS'				=> 'Es gibt derzeit keine Einträge im Pastebin.',

	'PASTEBIN'					=> 'Pastebin',
	'PASTEBIN_AUTH_NO_VIEW'		=> 'Du hast keine Berechtigung, die Seite anzuzeigen.',
	'PASTEBIN_AUTH_NO_POST'		=> 'Du hast keine Berechtigung, einen Eintrag zu erstellen.',
	'PASTEBIN_CONFIRM'			=> 'Visuelle Bestätigung',
	'PASTEBIN_CONFIRM_EXPLAIN'	=> 'Gib den Code genau so ein, wie du ihn siehst; Groß- und Kleinschreibung wird nicht unterschieden, Null wird nicht verwendet.',
	'PASTEBIN_EMPTY_FILEUPLOAD'	=> 'Die hochgeladene Datei ist leer.',
	'PASTEBIN_EXPLAIN'			=> 'Im Pastebin kannst du Codeabschnitte oder auch ganze Dateien ablegen, um sie zum Beispiel später in einem Supportthema zu verlinken.',
	'PASTEBIN_HELLO'			=> 'Hat dich jemand hierher geschickt?',
	'PASTEBIN_HELLO_EXPLAIN'	=> 'Wenn du hier her geschickt wurdest, füge bitte die gewünschte Datei oder den Code in das unten stehende Textfeld ein und gib die URL der Person, die dich hierher geschickt hat.',
	'PASTEBIN_INSTALLED'		=> 'Das Pastebin wurde erfolgreich installiert.',
	'PASTEBIN_INVALID_FILENAME'	=> '%s ist ein ungültiger Dateiname',
	'PASTEBIN_NOT_UPLOADED'		=> 'Upload der Datei fehlgeschlagen.',
	'PASTEBIN_NO_AUTH'			=> 'Information',
	'PASTEBIN_NO_AUTH_EXPLAIN'	=> 'Du bist nicht befugt, neue Snippets hinzuzufügen.',
	'PASTEBIN_NO_AUTH_GUEST_EXPLAIN' => 'Du musst dich anmelden um neue Snippets hinzufügen zu können.',
	'PASTEBIN_PARTIAL_UPLOAD'	=> 'Die Datei wurde nur teilweise hochgeladen.',
	'PASTEBIN_PHP_SIZE_NA'		=> 'Die Datei überschreitet die maximale Dateigröße.',
	'PASTEBIN_PHP_SIZE_OVERRUN'	=> 'Die Datei überschreitet die maximale Dateigröße von %d MiB.',
	'PASTEBIN_POST'				=> 'Neuen Eintrag erstellen',
	'PASTEBIN_POST_EXPLAIN'		=> 'Bitte gib nun einen Titel für deinen Eintrag an und wähle die Syntaxhervorhebung und Speicherdauer aus. Optional kannst du auch noch eine Beschreibung für deinen Eintrag angegeben. Zum Schluss lädst du deinen Code als Datei hoch <em>oder</em> fügst ihn einfach per Copy&Paste in das Eingabefeld ein.',
	'PASTEBIN_TOO_MANY'			=> 'Du hast die maximal zulässige Anzahl von Anmeldeversuchen überschritten. Bitte versuche es zu einem späteren Zeitpunkt erneut.',
	'PASTEBIN_UPDATED'			=> 'Das Pastebin wurde erfolgreich auf die neueste Version upgedatet.',
	'PASTEBIN_UPLOAD'			=> 'Datei hochladen',
	'PASTEBIN_UPLOAD_EXPLAIN'	=> 'Hast du eine Datei zum Hochladen ausgewählt, dann wird evtl. vorhandener Code im unteren Eingabefeld ignoriert!',
	'PASTEBIN_VIEW'				=> 'Eintrag ansehen - %s',
	'PASTEBIN_WRONG_FILESIZE'	=> 'Die Datei ist zu groß. (Maximale Dateigröße ist %1d %2s)',

	'PASTEBIN_PRUNING_MONTHS'			=> 'Speicherdauer',
	'PASTEBIN_PRUNING_MONTH_SHORT'		=> 'Monate',

	'PASTEBIN_RETURN_PASTEBIN'			=> '%sZurück zum Pastebin%s',
	'PASTEBIN_RETURN_SNIPPET'			=> '%sEintrag anzeigen%s',

	'PASTEBIN_SHORT_PRUNABLE'			=> 'Prunable - automatisch löschbar',
	'PASTEBIN_INFINITE'					=> 'Unendlich',
	'PASTEBIN_SNIPPET_NEW'				=> 'Neuer Eintrag',
	'PASTEBIN_SNIPPET_DESC'				=> 'Beschreibung',
	'PASTEBIN_SNIPPET_DOWNLOAD'			=> 'Eintrag herunterladen',
	'PASTEBIN_SNIPPET_HILIT'				=> 'zeige hervorgehobenen Eintrag',
	'PASTEBIN_SNIPPET_HIGHLIGHT'			=> 'Syntaxhervorhebung',
	'PASTEBIN_SNIPPET_MODERATED'			=> 'Das Snippet wurde erfolgreich bearbeitet.',
	'PASTEBIN_SNIPPET_TEXT'				=> 'Dein Code',
	'PASTEBIN_SNIPPET_TITLE'				=> 'Titel',
	'PASTEBIN_SNIPPET_CREATION_TIME'		=> 'Snippet erstellt',
	'PASTEBIN_SNIPPET_PRUNE_TIME'		=> 'Snippet wird automatisch gelöscht',
	'PASTEBIN_SNIPPET_PLAIN'				=> 'zeige einfaches Snippet',
	'PASTEBIN_SNIPPET_PRUNABLE'			=> 'Eintrag prunable - automatisch löschbar',
	'PASTEBIN_SNIPPET_PRUNABLE_EXPLAIN'	=> 'Wenn diese Option deaktiviert ist, wird der Eintrag nicht in die monatlich automatisch zu löschenden Einträge aufgenommen.',
	'PASTEBIN_SNIPPET_SUBMITTED'			=> 'Dein Eintrag wurde erfolgreich erstellt.',
));

// these are used by geshi
$lang['PASTEBIN_LANGUAGES'] = array(
	'text'				=> 'Text',
	'php'				=> 'PHP',
	'sql'				=> 'SQL',
	'html4strict'		=> 'HTML',
	'css'				=> 'CSS',
	'javascript'		=> 'Javascript',
	'xml'				=> 'XML',
	'diff'				=> 'Diff',
	'robots'			=> 'robots.txt',

/**
* Wenn eine weitere Sprache aktiviert werden soll, muss die Datei in den includes/geshi/ Ordner
* kopiert werden, und der Eintrag der Sprachdatei wieder nach aktiviert werden.
*/

/*
	'actionscript'		=> 'ActionScript',
	'ada'				=> 'Ada',
	'apache'			=> 'Apache',
	'applescript'		=> 'AppleScript',
	'asm'				=> 'x86 Assembler',
	'autoit'			=> 'AutoIt',
	'bash'				=> 'Bash',
	'blitzbasic'		=> 'BlitzBasic',
	'bnf'				=> 'BNF',
	'c_mac'				=> 'C (Mac)',
	'caddcl'			=> 'CAD DCL',
	'cadlisp'			=> 'CAD Lisp',
	'cfdg'				=> 'CFDG',
	'cfm'				=> 'ColdFusion',
	'cpp-qt'			=> 'C++ (QT)',
	'css-gen.cfg'		=> 'C#',
	'c_mac'				=> 'C (Mac)',
	'd'					=> 'D',
	'delphi'			=> 'Delphi',
	'div'				=> 'DIV',
	'dos'				=> 'DOS',
	'eiffel'			=> 'Eiffel',
	'fortran'			=> 'Fortran',
	'freebasic'			=> 'FreeBasic',
	'gml'				=> 'GML',
	'groovy'			=> 'Groovy',
	'idl'				=> 'Uno Idl',
	'ini'				=> 'INI',
	'inno'				=> 'Inno',
	'io'				=> 'Io',
	'java5'				=> 'Java(TM) 2 Platform Standard Edition 5.0',
	'latex'				=> 'LaTeX',
	'lisp'				=> 'Lisp',
	'lua'				=> 'Lua',
	'matlab'			=> 'Matlab M',
	'mirc'				=> 'mIRC Scripting',
	'mpasm'				=> 'Microchip Assembler',
	'mysql'				=> 'MySQL',
	'nsis'				=> 'NSIS',
	'objc'				=> 'Objective C',
	'ocaml-brief'		=> 'OCaml',
	'ocaml'				=> 'OCaml',
	'oobas'				=> 'OpenOffice.org Basic',
	'oracle8'			=> 'Oracle 8 SQL',
	'pascal'			=> 'Pascal',
	'php-brief'			=> 'PHP (brief)',
	'ruby'				=> 'Ruby',
	'sas'				=> 'SAS',
	'scheme'			=> 'Scheme',
	'sdlbasic'			=> 'sdlBasic',
	'smalltalk'			=> 'Smalltalk',
	'tcl'				=> 'TCL',
	'thinbasic'			=> 'thinBasic',
	'tsql'				=> 'T-SQL',
	'plsql'				=> 'PL/SQL',
	'python'			=> 'Python',
	'qbasic'			=> 'QBasic/QuickBASIC',
	'rails'				=> 'Rails',
	'reg'				=> 'Microsoft Registry',
	'vbnet'				=> 'vb.net',
	'vhdl'				=> 'VHDL',
	'visualfoxpro'		=> 'Visual Fox Pro',
	'winbatch'			=> 'Winbatch',
	'xpp'				=> 'X++',
	'z80'				=> 'ZiLOG Z80 Assembler',
*/
);
