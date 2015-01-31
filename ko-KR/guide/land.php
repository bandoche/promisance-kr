<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/land.php $
 * $Id: land.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'land', 'g_land', 'Exploration');
function g_land ()
{
?>
<h2>Exploration</h2>
<p>For small empires, attacking others to gain land is infeasible - their time is better spent exploring.</p>
<p>While spending turns here, your empire will expand its borders and gain additional land.</p>
<p>Be warned - as your empire grows larger, it will become more and more difficult to find usable land, at which point you will have to resort to <?=guidelink('military', 'attacking')?> other empires to steal their land.</p>
<?
}
?>
