<?php
/**
*
* @package FAQ Manager
* @copyright (c) 2015 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\faqmanager\acp;

class faqmanager_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $user;

		$this->tpl_name		= 'faq_manage';
		$this->page_title	= $user->lang('FAQ_MANAGER');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('david63.faqmanager.admin.controller');

		// Make the $u_action url available in the admin controller
		$admin_controller->set_page_url($this->u_action);

		$admin_controller->display_output();
	}
}
