<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/misc/buildings.php $
 * $Id: buildings.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

$guidepages[] = 'buildings';
guidepage($topic, 'buildings', 'g_buildings', '건축물');
function g_buildings ()
{
	global $era;
?>
<h2>건축물</h2>
<p>제국의 땅을 아래와 같은 목적으로 사용할 수 있습니다:</p>
<dl>
    <dt><?=lang($era->bldpop)?></dt>
        <dd><?=lang($era->peasants)?>들을 위해서 특별히 제작된 집입니다. 더 많은 <?=lang($era->peasants)?>들이 살 수 있습니다.</dd>
    <dt><?=lang($era->bldcash)?></dt>
        <dd>제국의 경재를 발전시켜, 시민 1명당의 수입을 늘려주기도 하며, 직접 돈을 벌기도 합니다.</dd>
    <dt><?=lang($era->bldtrp)?></dt>
        <dd>군사 병력을 생산합니다. 생산하는 병력의 비율은 <?=guidelink('manage', '제국 관리하기')?>에서 바꿀 수 있습니다.</dd>
    <dt><?=lang($era->bldcost)?></dt>
        <dd>병력을 잘 관리하면서 유지비를 낮출 수 있습니다. 또한 암시장에서 병력을 저렴하게 구입할 수 있게도 해주며, 암시장에 병력이 들어오는 속도도 빠르게해줍니다.</dd>
    <dt><?=lang($era->bldwiz)?></dt>
        <dd><?=lang($era->trpwiz)?>들을 훈련시키는 곳이며, 마법을 쓸 때 필요한 <?=lang($era->runes)?>을(를) 만드는 곳입비다.</dd>
    <dt><?=lang($era->bldfood)?></dt>
        <dd><?=lang($era->peasants)?>들과 군사들에게 가장 중요한 식량을 만드는 곳입니다. 식량이 부족하다면 군사들이 굶고 결국은 나라가 멸망하게됩니다..</dd>
    <dt><?=lang($era->blddef)?></dt>
        <dd>방어를 위한 건물입니다. 1개당 최대 방어력을 450까지 올려줄 수 있습니다. 최대한의 방어력을 위해서는 1개당 150개의 <?=lang($era->trparm)?>이(가) 필요합니다.</dd>
</dl>
<?
}
?>
