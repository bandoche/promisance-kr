<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/misc/eras.php $
 * $Id: eras.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

$guidepages[] = 'eras';
guidepage($topic, 'eras', 'g_eras', '시대');
function g_eras ()
{
	global $era;
	global $eras;
?>
<h2>시대</h2>
<p>이 게임에서는 제국들은 3개의 다른 시대에 존재할 수 있습니다. 다른 시대에 존재하는 제국과 연결하기 위해서는 시간의 문이 필요합니다.</p>
<p><?=guidelink('units', '군사들')?>의 공격력과 방어력은 시대에 따라서 다릅니다. 또한 시대별로 제국의 능력이 조금씩 달라집니다:</p>
<dl>
    <dt>산업</dt>
        <dd>군사 병력을 생산하는 능력입니다.</dd>
    <dt>마법력</dt>
        <dd><?=lang($era->trpwiz)?>들이 <?=lang($era->runes)?> 생산하는 능력입니다.</dd>
    <dt>탐색</dt>
        <dd><?=guidelink('land', '탐색 활동')?>을 할 때 마다 얻게 되는 땅의 넓이입니다.</dd>
</dl>
<table border="1">
<tr><th>시대</th>
    <th>산업</th>
    <th>마법력</th>
    <th>탐색</th></tr>
<?
	$attribs = array('industry' => 1, 'runepro' => 1, 'explore' => 1);
	foreach ($eras as $eid => $ename)
	{
		$_era = new prom_era($eid);
?>
<tr><th><?=$_era?></th>
<?
		foreach ($attribs as $attrib => $type)
		{
?>
    <td><?
			$val = 100 * ($_era->getData($attrib) - 1);
			if ($type == 1)
				echo colornum($val, percent(abs($val)), 'cgood', 'cbad', 'cneutral', '+', '-', '+');
			if ($type == 2)
				echo colornum($val, percent(abs($val)), 'cbad', 'cgood', 'cneutral', '+', '-', '-');
?></td>
<?
		}
?></tr>
<?
	}
?>
</table>
<?
}
?>
