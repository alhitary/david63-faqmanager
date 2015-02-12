<?php
/**
*
* @package FAQ Manager
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Swedish translation by Holger (http://www.maskinisten.net)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'BACKUP_LOCATION_NO_WRITE'	=> 'Backupfil kunde ej skapas. Kontrollera katalogbehörigheternaför store/faq_backup/ och alla kataloger och filer i den katalogen.',
	'BAD_FAQ_FILE'				=> 'Filen som du försöker ändra är ingen FAQ-fil.',

	'CREATE_CATEGORY'			=> 'Skapa kategori',
	'CREATE_FIELD'				=> 'Skapa ämne',

	'DELETE_CAT'				=> 'Radera kategori',
	'DELETE_VAR'				=> 'Radera ämne',

	'FAQ_ANSWER'				=> 'FAQ-svar',
	'FAQ_CAT_CAT'				=> 'Här kan du ändra en FAQ-kategori.',
	'FAQ_CAT_EDIT'				=> 'Här kan du ändra ett FAQ-ämne.',
	'FAQ_CAT_FAQ'				=> 'Här kan du lägga till ett FAQ-ämne till kategorin.',
	'FAQ_CAT_FILES'				=> 'Välj en FAQ-fil som du vill ändra.',
	'FAQ_CAT_LIST'				=> 'Här kan du hantera kategorierna i den valda filen.<br /><br /><strong>Observera att en kategori med benämningen “--” är en sektions-separerare för FAQ-sidan.</strong>',
	'FAQ_CAT_SUCCESS'			=> 'Kategorin har skapats.',
	'FAQ_CAT_QUESTION'			=> 'Här kan du hantera FAQ-ämnena i den valda kategorin.',
	'FAQ_CAT_TOPIC'				=> 'Här kan du skapa ett nytt FAQ-ämne.',
	'FAQ_DELETE_SUCCESS'		=> 'FAQ-datan har raderats.',
	'FAQ_EDIT_SUCCESS'			=> 'FAQ har uppdaterats.',
	'FAQ_TOPIC_SUCCESS'			=> 'Ämnet har lagts till.',
	'FAQ_FILE_NOT_EXIST'		=> 'Filen som du vill ändra existerar ej.',
	'FAQ_FILE_NO_WRITE'			=> 'Det går ej att uppdatera filen. Kontrollera filbehörigheterna för filen som du vill ändra.',
	'FAQ_FILE_SELECT'			=> 'Välj filen som du vill ändra.',
	'FAQ_LANGUAGE'				=> 'Språk',
	'FAQ_LOCATION'				=> 'Placering',
	'FAQ_MANAGER'				=> 'FAQ-hanterare',
	'FAQ_MANAGE'				=> 'Hantera FAQ',
	'FAQ_NAME'					=> 'Namn',
	'FAQ_QUESTION'				=> 'FAQ-ämne',
	'FAQ_CAT_QUESTION'			=> 'FAQ-kategori',
	'FAQ_SETTINGS'				=> 'Skapa/ändra FAQ-ämne',
	'FAQ_CAT_SETTINGS'			=> 'Ändra FAQ-kategori',

	'LOAD_BACKUP'				=> 'Ladda backup',

	'LOG_FAQ_ADD'				=> '<strong>FAQ-post har lagts till</strong>',
	'LOG_FAQ_DELETE'			=> '<strong>FAQ-post har raderats</strong>',
	'LOG_FAQ_EDIT'				=> '<strong>FAQ-post har ändrats</strong>',
	'LOG_FAQ_RESTORE'			=> '<strong>FAQ återställd från backup</strong>',

	'NOT_ALLOWED_OUT_OF_DIR'	=> 'Du är ej behörig att ändra filer ur språkkatalogen.',
	'NO_FAQ_FILES'				=> 'Inga FAQ-filer tillgängliga.',
	'NO_FAQ_VARS'				=> 'Det finns inga FAQ i filen.',

	'ON_TO_NEXT'				=> 'Gå till nästa steg',

	'VAR_NOT_EXIST'				=> 'Variablen existerar ej.',
));
