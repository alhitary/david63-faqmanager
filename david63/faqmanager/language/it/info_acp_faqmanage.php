<?php
/**
*
* @package FAQ Manager
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Italian translation by systemcrack http://morfeuscommunity.biz
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
	'BACKUP_LOCATION_NO_WRITE'	=> 'Impossibile creare un file di backup. Si prega di controllare i permessi di directory per memorizzare/faq_backup/ e ogni directory e file in esso contenuti.',
	'BAD_FAQ_FILE'				=> 'Il file che si sta tentando di modificare non è un file delle FAQ.',

	'CREATE_CATEGORY'			=> 'Crea Categoria',
	'CREATE_FIELD'				=> 'Crea Argomento',

	'DELETE_CAT'				=> 'Elimina Categoria',
	'DELETE_VAR'				=> 'Elimina Argomento',

	'FAQ_ANSWER'				=> 'FAQ risposta',
	'FAQ_CAT_CAT'				=> 'Da qui è possibile modificare le categorie FAQ.',
	'FAQ_CAT_EDIT'				=> 'Da qui è possibile modificare un argomento FAQ.',
	'FAQ_CAT_FAQ'				=> 'Da qui è possibile aggiungere un argomento FAQ nella categoria.',
	'FAQ_CAT_FILES'				=> 'Selezionare il file FAQ che si desidera modificare.',
	'FAQ_CAT_LIST'				=> 'Da qui è possibile gestire le categorie nel file selezionato.<br /><br /><strong>Si noti che una categoria denominata “--” è l´interruzione di sezione per la pagina di visualizzazione FAQ.</strong>',
	'FAQ_CAT_SUCCESS'			=> 'La categoria è stata inserita correttamente.',
	'FAQ_CAT_QUESTION'			=> 'Da qui è possibile gestire gli argomenti frequenti nella categoria selezionata.',
	'FAQ_CAT_TOPIC'				=> 'Da qui è possibile creare un nuovo argomento FAQ.',
	'FAQ_DELETE_SUCCESS'		=> 'I dati delle FAQ sono stati eliminati correttamente.',
	'FAQ_EDIT_SUCCESS'			=> 'The FAQ was updated successfully.',
	'FAQ_TOPIC_SUCCESS'			=> 'L´argomento è stato aggiunto con successo.',
	'FAQ_FILE_NOT_EXIST'		=> 'Il file che si sta tentando di modificare non esiste.',
	'FAQ_FILE_NO_WRITE'			=> 'Impossibile aggiornare il file. Si prega di verificare le autorizzazioni file per il file che si sta tentando di modificare.',
	'FAQ_FILE_SELECT'			=> 'Selezionare il file che si desidera modificare.',
	'FAQ_LANGUAGE'				=> 'Lingua',
	'FAQ_LOCATION'				=> 'Posizione',
	'FAQ_MANAGER'				=> 'FAQ Manager',
	'FAQ_MANAGE'				=> 'Gestisci FAQs',
	'FAQ_NAME'					=> 'Nome',
	'FAQ_QUESTION'				=> 'Argomento FAQ',
	'FAQ_CAT_QUESTION'			=> 'Categoria FAQ',
	'FAQ_SETTINGS'				=> 'Crea/Modifica Argomento FAQ',
	'FAQ_CAT_SETTINGS'			=> 'Modifica Category FAQ',

	'LOAD_BACKUP'				=> 'Carica Backup',

	'LOG_FAQ_ADD'				=> '<strong>Elemento FAQ aggiunto</strong>',
	'LOG_FAQ_DELETE'			=> '<strong>Elemento FAQ eliminato</strong>',
	'LOG_FAQ_EDIT'				=> '<strong>Elemento FAQ modificato</strong>',
	'LOG_FAQ_RESTORE'			=> '<strong>FAQ ripristinate dal backup</strong>',

	'NOT_ALLOWED_OUT_OF_DIR'	=> 'Non sei autorizzato a modificare i file fuori dalla directory della lingua.',
	'NO_FAQ_FILES'				=> 'File FAQ non disponibile.',
	'NO_FAQ_VARS'				=> 'Non ci sono FAQs nel file.',

	'ON_TO_NEXT'				=> 'Vai al prossimo passo',

	'VAR_NOT_EXIST'				=> 'La variabile richiesta non esiste.',
));
