<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/admin/locks.php $
 * $Id: locks.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

if ($adminflag & UFLAG_ADMIN)
	guidepage($topic, 'admin/locks', 'g_admin_locks', 'Database Locks');
function g_admin_locks ()
{
?>
<h2>Database Locks</h2>
<p>Due to the way database locking is implemented in this game, it is possible, albeit rare, for deadlocks to result. This page allows Administrators to cancel database locks in such an event.</p>
<p>Unlike other pages, this page can also be accessed if you are not logged in (since a database deadlock can prevent users from logging in), but will require entering the username and password of an Administrator account on every page load.</p>
<p>If there are any active database locks, they will be displayed in a series of tables, including the ID number of the user who has locked them. If an entity has just been created (e.g. from new user signup or having created a Clan), the locker will be listed as "<?=lang('ADMIN_LOCKS_NAME_NEW')?>"; if the turns script is in the process of updating the game, the locker will be listed as "<?=lang('ADMIN_LOCKS_NAME_TURNS')?>"; finally, if another Administrator is attempting to reset the game, the locker will be listed as "<?=lang('ADMIN_LOCKS_NAME_RESET')?>".</p>
<p>To unlock entities, simply check their corresponding checkboxes and click the "Unlock" button (specifying your username and password if you are not currently logged in); with luck, any other processes waiting on these locks should resolve themselves and unlock any remaining entities.</p>
<?
}
?>
