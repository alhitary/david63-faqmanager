<?php
/**
*
* FAQ manager extension for the phpBB Forum Software package.
* French translation by fbrcrsi (http://www.fbrcrsi.fr) and Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 david63
* @license GNU General Public License, version 2 (GPL-2.0)
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'BACKUP_LOCATION_NO_WRITE'	=> 'Impossible de créer un fichier de sauvegarde. Merci de vérifier les permissions en écriture pour le répertoire <samp>store/faq_backup/</samp> ainsi que les répertoires et fichiers se trouvant à l’intérieur.',
	'BAD_FAQ_FILE'				=> 'Ce fichier n’est pas un fichier de la FAQ.',

	'CATEGORY_NOT_EXIST'			=> 'La catégorie n’existe pas.',
	'CREATE_CATEGORY'			=> 'Créer une catégorie',
	'CREATE_FIELD'				=> 'Créer une question',

	'DELETE_CAT'				=> 'Supprimer une catégorie',
	'DELETE_VAR'				=> 'Supprimer une question',

	'FAQ_ANSWER'				=> 'Réponse',
	'FAQ_CAT_CAT'				=> 'Depuis cette page, il est possible de modifier la catégorie.',
	'FAQ_CAT_EDIT'				=> 'Depuis cette page, il est possible de modifier la question.',
	'FAQ_CAT_FAQ'				=> 'Depuis cette page, il est possible d’ajouter des questions pour cette catégorie.',
	'FAQ_CAT_FILES'				=> 'Depuis cette page il est possible de modifier les fichiers de la FAQ.',
	'FAQ_CAT_LIST'				=> 'Depuis cette page, il est possible de gérer les catégories du fichier sélectionné.<br /><br /><strong>Une catégorie nommée « -- » permet de créer un saut de ligne sur la page de la FAQ.</strong>',
	'FAQ_CAT_SUCCESS'			=> 'La catégorie a été ajoutée avec succès.',
	'FAQ_CAT_QUESTION'			=> 'Depuis cette page, il est possible de gérer les questions de la catégorie sélectionnée.',
	'FAQ_CAT_TOPIC'				=> 'Depuis cette page, il est possible d’ajouter une nouvelle question.',
	'FAQ_DELETE_SUCCESS'		=> 'Les données de la FAQ ont été supprimées avec succès.',
	'FAQ_EDIT_SUCCESS'			=> 'La FAQ a été mise à jour avec succès.',
	'FAQ_TOPIC_SUCCESS'			=> 'La question a été ajoutée avec succès.',
	'FAQ_FILE_NOT_EXIST'		=> 'Ce fichier n’existe pas.',
	'FAQ_FILE_NO_WRITE'			=> 'Impossible de mettre à jour le fichier.  Merci de vérifier les permissions en écriture pour ce fichier.',
	'FAQ_FILE_SELECT'			=> 'Sélectionner un fichier de la FAQ à modifier.',
	'FAQ_LANGUAGE'				=> 'Langue',
	'FAQ_LOCATION'				=> 'Emplacement',
	'FAQ_MANAGER'				=> 'Gestionnaire de FAQ',
	'FAQ_MANAGE'				=> 'Gérer la FAQ',
	'FAQ_NAME'					=> 'Nom',
	'FAQ_QUESTION'				=> 'Question',
	'FAQ_CAT_SETTINGS_QUESTION'			=> 'Catégorie de questions',
	'FAQ_SETTINGS'				=> 'Ajouter/modifier une question',
	'FAQ_CAT_SETTINGS'			=> 'Modifier une catégorie de questions',

	'LOAD_BACKUP'				=> 'Restaurer la sauvegarde',

	'LOG_FAQ_ADD'				=> '<strong>Un article de la FAQ a été ajouté</strong>',
	'LOG_FAQ_DELETE'			=> '<strong>Un article de la FAQ a été supprimé</strong>',
	'LOG_FAQ_EDIT'				=> '<strong>Un article de la FAQ a été modifié</strong>',
	'LOG_FAQ_RESTORE'			=> '<strong>LA FAQ a été restaurée depuis la sauvegarde</strong>',

	'NOT_ALLOWED_OUT_OF_DIR'	=> 'Vous n’êtes pas autorisé à modifier les fichiers en dehors du répertoire de la langue.',
	'NO_FAQ_FILES'				=> 'Les fichiers de la FAQ sont indisponibles.',
	'NO_FAQ_VARS'				=> 'Il n’y a aucune question dans cette catégorie.',

	'ON_TO_NEXT'				=> 'Continuer ',

	'VAR_NOT_EXIST'				=> 'La variable demandée n’existe pas.',
));
