<?php
/**
*
* @package FAQ Manager
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* Croatian translation by Ančica Sečan (http://ancica.sunceko.net)
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
'BACKUP_LOCATION_NO_WRITE'=>'Nije bilo moguće kreirati zaštitnu kopiju datoteke.<br />Provjeri dopuštenja za store/faq_backup/ i svaku pripadajuću mapu/datoteku.',
'BAD_FAQ_FILE'=>'Datoteka koju pokušavaš urediti nije ČPP datoteka.',
'CREATE_CATEGORY'=>'Kreiraj kategoriju',
'CREATE_FIELD'=>'Kreiraj temu',
'DELETE_CAT'=>'Izbriši kategoriju',
'DELETE_VAR'=>'Izbriši temu',
'FAQ_ANSWER'=>'ČPP odgovor',
'FAQ_CAT_CAT'=>'Ovdje možeš urediti ČPP kategoriju.',
'FAQ_CAT_EDIT'=>'Ovdje možeš urediti ČPP temu.',
'FAQ_CAT_FAQ'=>'Ovdje možeš dodati temu ČPP u kategoriju.',
'FAQ_CAT_FILES'=>'Izaberi ČPP datoteku koju želiš urediti.',
'FAQ_CAT_LIST'=>'Ovdje možeš uređivati kategorije izabrane datoteke.<br /><br /><strong>Napomena: kategorija nazvana “--” je prijelom prikaza stranice ČPP.</strong>',
'FAQ_CAT_SUCCESS'=>'Kategorija je dodana.',
'FAQ_CAT_QUESTION'=>'Ovdje možeš uređivati teme izabrane kategorije.',
'FAQ_CAT_TOPIC'=>'Ovdje možeš kreirati novu temu ČPP.',
'FAQ_DELETE_SUCCESS'=>'Podatci ČPP su izbrisani.',
'FAQ_EDIT_SUCCESS'=>'ČPP je ažurirano.',
'FAQ_TOPIC_SUCCESS'=>'Tema je dodana.',
'FAQ_FILE_NOT_EXIST'=>'Datoteka koju pokušavaš urediti ne postoji.',
'FAQ_FILE_NO_WRITE'=>'Nije bilo moguće ažurirati datoteku.<br />Provjeri dopuštenja za datoteku koju pokušavaš urediti.',
'FAQ_FILE_SELECT'=>'Izaberi datoteku koju želiš urediti.',
'FAQ_LANGUAGE'=>'Jezik',
'FAQ_LOCATION'=>'Lokacija',
'FAQ_MANAGER'=>'Često postavlje(a)na pitanja',
'FAQ_MANAGE'=>'Upravljanje ČPPima',
'FAQ_NAME'=>'Naziv',
'FAQ_QUESTION'=>'ČPP tema',
'FAQ_CAT_QUESTION'=>'ČPP kategorija',
'FAQ_SETTINGS'=>'Kreiraj/Uredi ČPP temu',
'FAQ_CAT_SETTINGS'=>'Uredi ČPP kategoriju',
'LOAD_BACKUP'=>'Učitaj zaštitnu kopiju',
'LOG_FAQ_ADD'=>'<strong>ČPP stavka dodana</strong>',
'LOG_FAQ_DELETE'=>'<strong>ČPP stavka izbrisana</strong>',
'LOG_FAQ_EDIT'=>'<strong>ČPP stavka uređena</strong>',
'LOG_FAQ_RESTORE'=>'<strong>ČPP vraćena iz zaštitne kopije</strong>',
'NOT_ALLOWED_OUT_OF_DIR'=>'Nisi ovlašten/a za uređivanje datoteka van jezične mape.',
'NO_FAQ_FILES'=>'Nema dostupnih ČPP datoteka.',
'NO_FAQ_VARS'=>'Nema ČPP u datoteci.',
'ON_TO_NEXT'=>'Idi na sljedeći korak',
'VAR_NOT_EXIST'=>'Zatražena varijabla ne postoji.',
));
