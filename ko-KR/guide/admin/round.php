<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/admin/round.php $
 * $Id: round.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

if ($adminflag & UFLAG_ADMIN)
	guidepage($topic, 'admin/round', 'g_admin_round', 'Round Settings');
function g_admin_round ()
{
?>
<h2>Round Settings</h2>
<p>This page allows Administrators to modify the current round's start date, cooldown date (at which point various things such as signup and vacation are disallowed), and ending date.</p>
<p>From here, Administrators can also reset the game to begin a new round, automatically creating new empires for selected Administrators and Moderators. Simply mark the checkboxes of the accounts for which you wish to create empires, then specify empire names in the matching text boxes.</p>
<p>Note that resetting the game will log out all users, including yourself - after complete, you will have to relogin in order to change any other settings.</p>
<?
}
?>
