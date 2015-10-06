<?php
/**
*
* @package FAQ Manager
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'BACKUP_LOCATION_NO_WRITE'	=> 'لا يُمكن إنشاء ملف النسخة الإحتياطية. نرجوا التأكد من صلاحيات المجلد <samp>store/faq_backup/</samp> وكل ما يحتويه من ملفات أو مجلدات.',
	'BAD_FAQ_FILE'				=> 'الملف الذي تحاول تعديله ليس ملف الأسئلة المُتكررة.',

	'CATEGORY_NOT_EXIST'			=> 'القسم غير موجود',
	'CREATE_CATEGORY'			=> 'إنشاء قسم ',
	'CREATE_FIELD'				=> 'إنشاء موضوع',

	'DELETE_CAT'				=> 'حذف القسم',
	'DELETE_VAR'				=> 'حذف الموضوع',

	'FAQ_ANSWER'				=> 'إجابة الأسئلة المُتكررة',
	'FAQ_CAT_CAT'				=> 'من هنا تستطيع تعديل قسم الأسئلة المُتكررة.',
	'FAQ_CAT_EDIT'				=> 'من هنا تستطيع تعديل موضوع الأسئلة المُتكررة.',
	'FAQ_CAT_FAQ'				=> 'من هنا تستطيع إضافة موضوع السوأل إلى القسم.',
	'FAQ_CAT_FILES'				=> 'حدد ملف الأسئلة المُتكررة التي تريد تعديلها.',
	'FAQ_CAT_LIST'				=> 'من هنا تستطيع إدارة الأقسام في الملف المُحدد.<br /><br /><strong>نرجوا الملاحظة بأن إسم القسم “--” هو الذي سيحتوي على الأسئلة المُتكررة.</strong>',
	'FAQ_CAT_SUCCESS'			=> 'تم إضافة القسم بنجاح.',
	'FAQ_CAT_QUESTION'			=> 'من هنا تستطيع إدارة مواضيع الأسئلة المُتكررة في القسم المُحدد.',
	'FAQ_CAT_TOPIC'				=> 'من هنا تستطيع إنشاء موضوع جديد في الأسئلة المُتكررة.',
	'FAQ_DELETE_SUCCESS'		=> 'تم حذف بيانات السوأل بنجاح.',
	'FAQ_EDIT_SUCCESS'			=> 'تم تحديث السوأل بنجاح.',
	'FAQ_TOPIC_SUCCESS'			=> 'تم إضافة الموضوع بنجاح.',
	'FAQ_FILE_NOT_EXIST'		=> 'الملف الذي تحاول التعديل عليه غير موجود.',
	'FAQ_FILE_NO_WRITE'			=> 'لا يُمكن تحديث الملف. نرجوا التأكد من حصولك على الصلاحيات المطلوبة للتعديل على هذا الملف.',
	'FAQ_FILE_SELECT'			=> 'حدد الملف الذي تريد تعديله.',
	'FAQ_LANGUAGE'				=> 'اللغة',
	'FAQ_LOCATION'				=> 'المسار',
	'FAQ_MANAGER'				=> 'مدير الأسئلة المُتكررة',
	'FAQ_MANAGE'				=> 'الإعدادات',
	'FAQ_NAME'					=> 'الإسم',
	'FAQ_QUESTION'				=> 'موضوع السوأل ',
	'FAQ_CAT_SETTINGS_QUESTION'			=> 'قسم الأسئلة المُتكررة',
	'FAQ_SETTINGS'				=> 'إنشاء / تعديل موضوع السوأل',
	'FAQ_CAT_SETTINGS'			=> 'تعديل القسم',

	'LOAD_BACKUP'				=> 'تحميل نسخة احتياطية',

	'LOG_FAQ_ADD'				=> '<strong>تم إضافة بند في الأسئلة المُتكررة</strong>',
	'LOG_FAQ_DELETE'			=> '<strong>تم حذف بند في الأسئلة المُتكررة</strong>',
	'LOG_FAQ_EDIT'				=> '<strong>تم تعديل بند في الأسئلة المُتكررة</strong>',
	'LOG_FAQ_RESTORE'			=> '<strong>تم استعادة نسخة احتياطية للأسئلة المُتكررة</strong>',

	'NOT_ALLOWED_OUT_OF_DIR'	=> 'غير مسموح لك بالتعديل على الملفات خارج مجلد اللغة.',
	'NO_FAQ_FILES'				=> 'ملفات الأسئلة المُتكررة غير موجود.',
	'NO_FAQ_VARS'				=> 'لا يوجد مواضيع في هذا القسم.',

	'ON_TO_NEXT'				=> 'اذهب إلى الخطوة التالية',

	'VAR_NOT_EXIST'				=> 'المتغير المطلوب غير موجود.',
));
