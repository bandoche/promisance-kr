<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/misc/units.php $
 * $Id: units.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

$guidepages[] = 'units';
guidepage($topic, 'units', 'g_units', '군사 병력');
function g_units ()
{
	global $eras, $_era;
	$req = getFormVar('era');
	if (!prom_era::exists($req))
		$req = $_era;
	$era = new prom_era($req);
?>
<h2>군사 병력</h2>
<p>군대로 다른 제국들의 공격을 막을 때 뿐만 아니라 당신을 위헙하는 다른 제국에게도 공격을 할 수 있습니다.</p>
<h3> - <?
	foreach ($eras as $eid => $ename)
	{
		if ($eid == $req)
			echo guidelink('units', '<b>'. $ename .'</b>', 'era', $eid);
		else	echo guidelink('units', $ename, 'era', $eid);
		echo " - ";
	}
?></h3>
<dl>
    <dt><?=lang($era->trparm)?></dt>
        <dd>기본적인 군사 병력입니다. 강하지는 않지만 저렴하기 때문에 한꺼번에 다수의 병력을 모아서 큰 피해를 줄 수 있습니다.<br />생산비 <?=PVTM_TRPARM?>원, 공격력 <?=$era->o_trparm?>, 방어력 <?=$era->d_trparm?>.</dd>
    <dt><?=lang($era->trplnd)?></dt>
        <dd>강력한 <?if ($era->o_trplnd > $era->d_trplnd) echo '공격형'; else echo '방어형';?> 병력입니다. 적국의 땅을 빼앗아 올 때 사용합니다.<br />생산비 <?=PVTM_TRPLND?>원, 공격력 <?=$era->o_trplnd?>, 방어력 <?=$era->d_trplnd?>.</dd>
    <dt><?=lang($era->trpfly)?></dt>
        <dd>재빠르게 공중 공격을 할 수 있는 병력입니다. 특히 <?if ($era->o_trpfly > $era->d_trpfly) echo '공격'; else echo '방어';?>에 능합니다.<br />생산비 <?=PVTM_TRPFLY?>원, 공격력 <?=$era->o_trpfly?>, 방어력 <?=$era->d_trpfly?>.</dd>
    <dt><?=lang($era->trpsea)?></dt>
        <dd>공격할 때 뿐만 아니라 외국에 원조를 보낼때도 사용하는 병력입니다. 공격력과 방어력이 모두 강해서 비싼 병력이기는 하지만 가장 강력한 병력입니다.<br />생산비 <?=PVTM_TRPSEA?>원, 공격력 <?=$era->o_trpsea?>, 방어력 <?=$era->d_trpsea?>.</dd>
</dl>
<?
}
?>
