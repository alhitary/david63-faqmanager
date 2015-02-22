<?php
/**
*
* @package FAQ Manager
* @copyright (c) 2015 david63
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
	'BACKUP_LOCATION_NO_WRITE'	=> 'Yedek dosyası oluşturulamıyor. Lütfen store/faq_backup/ ve bunun içindeki her dosya klasörün izinlerini kontrol edin.',
	'BAD_FAQ_FILE'				=> 'Düzenlemeye çalıştığınız dosya bir SSS dosyası değil.',

	'CREATE_CATEGORY'			=> 'Kategori oluştur',
	'CREATE_FIELD'				=> 'Konu oluştur',

	'DELETE_CAT'				=> 'Kategoriyi sil',
	'DELETE_VAR'				=> 'Konuyu sil',

	'FAQ_ANSWER'				=> 'SSS cevabı',
	'FAQ_CAT_CAT'				=> 'Buradan SSS kategorisini düzenleyebilirsiniz.',
	'FAQ_CAT_EDIT'				=> 'Buradan SSS konusunu düzenleyebilirsiniz.',
	'FAQ_CAT_FAQ'				=> 'Buradan kategori içindeki SSS konusu ekleyebilirsiniz.',
	'FAQ_CAT_FILES'				=> 'Düzenlemek istediğiniz SSS dosyasını seçin.',
	'FAQ_CAT_LIST'				=> 'Buradan seçili dosyadaki kategorileri yönetebilirsiniz.<br /><br /><strong> “--” şeklinde kategori isimlendirmesinin SSS sayfasında bölüm ayracı olarak görüneceğini unutmayın.</strong>',
	'FAQ_CAT_SUCCESS'			=> 'Kategori başarıyla eklendi.',
	'FAQ_CAT_QUESTION'			=> 'Buradan seçili kategorilerdeki SSS konularını yönetebilirsiniz.',
	'FAQ_CAT_TOPIC'				=> 'Buradan yeni bir SSS konusu oluşturabilirsiniz.',
	'FAQ_DELETE_SUCCESS'		=> 'SSS verisi başarıyla silindi.',
	'FAQ_EDIT_SUCCESS'			=> 'SSS başarıyla güncellendi.',
	'FAQ_TOPIC_SUCCESS'			=> 'Konu başarıyla eklendi.',
	'FAQ_FILE_NOT_EXIST'		=> 'Düzenlemeye çalıştığınız dosya mevcut değil.',
	'FAQ_FILE_NO_WRITE'			=> 'Dosya güncellenemiyor. Lütfen düzenlemeye çalıştığınız dosyanın izinlerini kontrol edin.',
	'FAQ_FILE_SELECT'			=> 'Düzenlemek istediğiniz dosyayı seçin.',
	'FAQ_LANGUAGE'				=> 'Dil',
	'FAQ_LOCATION'				=> 'Konum',
	'FAQ_MANAGER'				=> 'SSS yöneticisi',
	'FAQ_MANAGE'				=> 'SSSleri yönet',
	'FAQ_NAME'					=> 'Ad',
	'FAQ_QUESTION'				=> 'SSS konusu',
	'FAQ_CAT_QUESTION'			=> 'SSS kategorisi',
	'FAQ_SETTINGS'				=> 'SSS konusu Oluştur/Düzenle',
	'FAQ_CAT_SETTINGS'			=> 'SSS kategorisini düzenle',

	'LOAD_BACKUP'				=> 'Yedeği yükle',

	'LOG_FAQ_ADD'				=> '<strong>SSS öğesi eklendi</strong>',
	'LOG_FAQ_DELETE'			=> '<strong>SSS öğesi silindi</strong>',
	'LOG_FAQ_EDIT'				=> '<strong>SSS öğesi düzenlendi</strong>',
	'LOG_FAQ_RESTORE'			=> '<strong>SSS yedekten geri yüklendi</strong>',

	'NOT_ALLOWED_OUT_OF_DIR'	=> 'Lisan dizinindeki dosyaları düzenlemeye yetkiniz yok.',
	'NO_FAQ_FILES'				=> 'Erişilebilir hiç bir SSS dosyası yok.',
	'NO_FAQ_VARS'				=> 'Dosyada hiç SSS yok.',

	'ON_TO_NEXT'				=> 'Sonraki adıma geç',

	'VAR_NOT_EXIST'				=> 'İstenilen değişken mevcut değil.',
));
