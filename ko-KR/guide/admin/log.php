<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/admin/log.php $
 * $Id: log.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

if ($adminflag & UFLAG_ADMIN)
	guidepage($topic, 'admin/log', 'g_admin_log', 'Event Log');
function g_admin_log ()
{
?>
<h2>Event Log</h2>
<p>QM Promisance automatically logs all errors encountered during execution, as well as empire actions (if you have enabled the appropriate configuration setting).</p>
<p>From this section, you may browse through all logged events - if you have been making code changes, this can be an excellent debugging tool.</p>
<p>The log should be cleared periodically by pressing the "Clear" button as it can consume a significant amount of disk space, especially if you have extended logging enabled.</p>
<?
}
?>
