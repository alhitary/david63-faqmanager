<?php
/**
*
* @package FAQ Manager
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated and adapted by fbrcrsi - http://www.fbrcrsi.fr
* for http://www.valeuropeen.fr
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
	'BACKUP_LOCATION_NO_WRITE'	=> 'Unable to create a backup file. Please check the directory permissions for store/faq_backup/ and every directory and file in it.',
	'BAD_FAQ_FILE'				=> 'The file you are attempting to edit is not a FAQ file.',

	'CREATE_CATEGORY'			=> 'Créer une catégorie',
	'CREATE_FIELD'				=> 'Créer une question',

	'DELETE_CAT'				=> 'Supprimer une catégorie',
	'DELETE_VAR'				=> 'Supprimer une question',

	'FAQ_ANSWER'				=> 'Réponse',
	'FAQ_CAT_CAT'				=> 'Edition des catégories.',
	'FAQ_CAT_EDIT'				=> 'Edition des questions.',
	'FAQ_CAT_FAQ'				=> 'Ajouter un sujet à une catégorie ici.',
	'FAQ_CAT_FILES'				=> 'Choisissez le fichier de FAQ à éditer.',
	'FAQ_CAT_LIST'				=> 'Liste des catégories.<br /><br /><strong>Une catégorie nommée “--” permet de creer un saut de ligne dans votre FAQ.</strong>',
	'FAQ_CAT_SUCCESS'			=> 'Catégorie ajoutée avec succès.',
	'FAQ_CAT_QUESTION'			=> 'Gestion des questions de la catégorie.',
	'FAQ_CAT_TOPIC'				=> 'Edition des questions.',
	'FAQ_DELETE_SUCCESS'		=> 'Supprimé avec succès.',
	'FAQ_EDIT_SUCCESS'			=> 'Mis à jour effectuée.',
	'FAQ_TOPIC_SUCCESS'			=> 'Question ajoutée avec succès.',
	'FAQ_FILE_NOT_EXIST'		=> 'Le fichier que vous tentez d\'éditer n\'existe pas',
	'FAQ_FILE_NO_WRITE'			=> 'Impossible de mettre le fichier à jour.  Veuillez vérifier les permissions du fichier.',
	'FAQ_FILE_SELECT'			=> 'Sélectionnez le fichier FAQ à éditer.',
	'FAQ_LANGUAGE'				=> 'Langue',
	'FAQ_LOCATION'				=> 'Emplacement',
	'FAQ_MANAGER'				=> 'FAQ Manager',
	'FAQ_MANAGE'				=> 'Gestionnaire de FAQ',
	'FAQ_NAME'					=> 'Nom',
	'FAQ_QUESTION'				=> 'Question',
	'FAQ_CAT_QUESTION'			=> 'Liste des questions',
	'FAQ_SETTINGS'				=> 'Ajouter/éditer une question',
	'FAQ_CAT_SETTINGS'			=> 'Edition des catéories',

	'LOAD_BACKUP'				=> 'Charger la sauvegarde',

	'LOG_FAQ_ADD'				=> '<strong>Article jouté</strong>',
	'LOG_FAQ_DELETE'			=> '<strong>Article supprimé</strong>',
	'LOG_FAQ_EDIT'				=> '<strong>Article édité</strong>',
	'LOG_FAQ_RESTORE'			=> '<strong>FAQ restaurée depuis la sauvegarde</strong>',

	'NOT_ALLOWED_OUT_OF_DIR'	=> 'Vous n\'êtes pas autorisé à éditer un fichier hors des dossiers de langue.',
	'NO_FAQ_FILES'				=> 'Fichier FAQ indisponible.',
	'NO_FAQ_VARS'				=> 'Il n\'y a pas de question dans cette catégorie.',

	'ON_TO_NEXT'				=> 'Continuer ',

	'VAR_NOT_EXIST'				=> 'La variable demandée n\'existe pas.',
));
