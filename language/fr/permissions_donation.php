<?php
/**
*
* permissions_donation.php [French]
*
* @package PayPal Donation MOD
* @copyright (c) 2014 Skouat
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
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
// ’ « » “ ” …
//

// Adding new category
$lang['permission_cat']['donation']   = 'PayPal Donation';

// Adding the permissions
$lang = array_merge($lang, array(
	// User Permissions
	'acl_u_ppde_use'		=> array('lang' => 'Peut faire un don', 'cat' => 'donation'),

	// Admin Permissions
	'acl_a_ppde_manage'	=> array('lang' => 'Peut gérer l’extension PayPal Donation', 'cat' => 'misc'),
));