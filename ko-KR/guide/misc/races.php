<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/misc/races.php $
 * $Id: races.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

$guidepages[] = 'races';
guidepage($topic, 'races', 'g_races', '종족');
function g_races ()
{
	global $era;
	global $races;
?>
<h2>종족</h2>
<p>이 게임에는 아래와 같은 장점과 단점을 가진 다양한 종족이 있습니다:</p>
<dl>
    <dt>공격</dt>
        <dd>다른 제국을 공격할 때의 공격력입니다.</dd>
    <dt>방어</dt>
        <dd>다른 제국의 공격을 막을때의 방어력입니다.</dd>
    <dt>건설</dt>
        <dd>건물을 짓거나 철거하는 능력입니다.</dd>
    <dt>유지</dt>
        <dd>군사 병력들을 유지하는데 필요한 비용입니다.</dd>
    <dt>마법</dt>
        <dd>당신이 마법을 쓰거나 다른 제국이 당신에게 마법을 쓸 때의 마법력입니다.</dd>
    <dt>산업</dt>
        <dd>군사 병력을 만드는 능력입니다.</dd>
    <dt>경재</dt>
        <dd>매 턴마다 시민 1명이 생산하는 돈입니다.</dd>
    <dt>탐색</dt>
        <dd>탐색 활동을 통해서 매 턴 얻는 땅의 크기입니다.</dd>
    <dt>시장</dt>
        <dd>암시장에서 병력의 가격입니다.</dd>
    <dt>소비</dt>
        <dd>인구와 병력에 따라서 <?=lang($era->food)?> 섭취하는 양입니다.</dd>
    <dt>주술</dt>
        <dd><?=lang($era->trpwiz)?>이(가) <?=lang($era->runes)?>을(를) 만드는 양입니다.</dd>
    <dt>농업</dt>
        <dd><?=lang($era->bldfood)?>이(가) <?=lang($era->food)?>을(를) 만드는 양입니다.</dd>
</dl>
<table border="1">
<tr><th>종족</th>
    <th>공격</th>
    <th>방어</th>
    <th>건설</th>
    <th>유지</th>
    <th>마법</th>
    <th>산업</th>
    <th>경재</th>
    <th>탐색</th>
    <th>시장</th>
    <th>소비</th>
    <th>주술</th>
    <th>농업</th></tr>
<?
	$attribs = array('offense' => 1, 'defense' => 1, 'buildrate' => 1, 'expenses' => 2, 'magic' => 1, 'industry' => 1, 'income' => 1, 'explore' => 1, 'market' => 2, 'foodcon' => 2, 'runepro' => 1, 'foodpro' => 1);
	foreach ($races as $rid => $rname)
	{
		$race = new prom_race($rid);
?>
<tr><th><?=$race?></th>
<?
		foreach ($attribs as $attrib => $type)
		{
?>
    <td><?
			$val = 100 * ($race->getData($attrib) - 1);
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
