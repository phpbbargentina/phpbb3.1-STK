<?php
/**
*
* @package Support Toolkit - Prune Avatars
* @version $Id$
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @French translation by Galixte (http://www.galixte.com)
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
	'PRUNE_AVATARS'				=> 'Vérifier les fichiers des avatars',
	'PRUNE_AVATARS_EXPLAIN'		=> 'Cet outil vérifie l’existence de fichiers d’avatars supplémentaires (<em>les fichiers des galeries d’avatars ne sont pas vérifiées</ em>). Si ces fichiers existent, ils seront supprimés. Voulez-vous continuer ?',
	'PRUNE_AVATARS_FINISHED'	=> 'Aucun fichier d’avatar trouvé.',
	'PRUNE_AVATARS_PROGRESS'	=> 'Vérification des fichiers inutiles en cours. Veuillez ne pas interrompre cette opération !<br />Les fichiers suivants ont été supprimés :',
	'PRUNE_AVATARS_FAIL'		=> '<br />Les fichiers suivants ne peuvent pas être supprimés :',
));
