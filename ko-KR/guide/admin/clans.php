<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/admin/clans.php $
 * $Id: clans.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

if ((CLAN_ENABLE) && ($adminflag & UFLAG_ADMIN))
	guidepage($topic, 'admin/clans', 'g_admin_clans', 'Manage Clans');
function g_admin_clans ()
{
?>
<h2>Clan Editor</h2>
<p>In the unlikely event that a Clan is left without an active leader (e.g. the leader goes on vacation), this page may be used to reassign leadership to another member of the clan. Simply select the new desired leader and press the corresponding "<?=lang('ADMIN_CLANS_LEADER_SUBMIT')?>" button and the role of clan Leader will be reassigned, removing any other ranks the selected empire may have had within the clan.</p>
<p>If a clan is created with an inappropriate name, select the clan (by its current name), enter the desired new clan name, then press "<?=lang('ADMIN_CLANS_RENAME_SUBMIT')?>". If valid, the clan's name will be updated.</p>
<?
}
?>
