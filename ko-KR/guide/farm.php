<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/farm.php $
 * $Id: farm.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'farm', 'g_farm', 'Agriculture Focus');
function g_farm ()
{
	global $era;
?>
<h2>Agriculture Focus</h2>
<p>Here you may choose to spend time with extra focus placed on producing <?=lang($era->food)?> to sustain your citizens and military.</p>
<p>While spending turns here, your empire's gross production of <?=lang($era->food)?> will increase by 25%.</p>
<?
}
?>
