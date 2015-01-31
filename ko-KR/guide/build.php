<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/build.php $
 * $Id: build.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'build', 'g_build', 'Construction');
function g_build ()
{
?>
<h2>Construction</h2>
<p>Without buildings, organization is impossible - from here, you may spend time and money building structures to strengthen your empire.</p>
<p>As the size of your empire increases you will be able to build structures more quickly, but the cost of building will also increase due to the difficulty of transporting materials.</p>
<p>For a description of what each building does, see <?=guidelink('structures', 'Structures')?>.</p>
<?
}
?>
