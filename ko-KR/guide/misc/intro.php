<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/misc/intro.php $
 * $Id: intro.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

$guidepages[] = 'intro';
guidepage($topic, 'intro', 'g_intro', '소개');
function g_intro ()
{
	global $era;
?>
<h2>소개</h2>
<p>새 제국의 지도자로써 당신의 목표는 다른 제국들을 제치고 최고의 제국을 만드는 것입니다. 외교에서 전쟁까지 다양한 방법을 통해서 당신의 제국을 가장 부유하게 만들어야됩니다. 그러는 과정에서 여러분과 같은 목표를 가지고 있는 수 많은 플레이어들과 경쟁 하게 될것입니다.</p>
<h2>턴제 게임</h2>
<p>QM Promisance는 턴제 게임입니다. 즉 당신의 제국을 조작하는데 시간에 따른 회수의 제한이 있다는 뜻입니다.</p>
<p><?=GAME_TITLE?>에서, 여러분은 매 <?=TURNS_FREQ?> 마다 <?=TURNS_COUNT?>턴을 받게 됩니다. 또한 매 턴은 <?=TURNS_MAXIMUM?> 개 까지 모아둘 수 있고, 이후에는 저장된 턴에 <?=TURNS_STORED?>개 까지 쌓았다가 턴을 받을 때 마다 하나씩 더 꺼내 쓸 수 있게 됩니다.</p>
<p>왼쪽 메뉴 중 "턴 사용하기"에 있는 모든 일들은 사용할 때 마다 해당하는 일에 따르는 턴을 사용하게 됩니다. <?=guidelink('cash', 'Cash')?>, <?=guidelink('farm', 'Farm')?>, 또는 <?=guidelink('land', 'Explore')?>와(과) 같은 일들은 그 일들을 수행할 턴을 지장해 줄 수 있습니다. 반면에 <?=guidelink('build', 'Build')?>, <?=guidelink('demolish', 'Demolish')?>와(과) 같은 일들은 여러분의 제국이 해당 일을 하는 능력에 따라서 소요되는 턴이 결정됩니다.</p>
<p>다른 제국을 <?=guidelink('military', '공격')?>하는 것, <?=guidelink('aid', '원조 지원')?>을 보내는 것, 또는 자기 자신에게나 다른 제국에게 <?=guidelink('magic', '마법')?>을 사용하는 것 등은 <b>2</b> 턴이 필요합니다.</p>
<p><?=guidelink('pvtmarketbuy', '암시장')?>이나 <?=guidelink('pubmarketbuy', '열린 시장')?>을 이용하거나, <?=guidelink('clan', '클랜')?>을 관리하거나 가입하는 일, 당신의 제국을 <?=guidelink('manage', '관리')?>하는 일이나 다른 제국으로 <?=guidelink('messages', '편지')?>를 보내는 일 등은 턴을 사용하지 않습니다.</p>
<p>매 턴을 사용할 때 마다, 시민들로 부터 세금을 거두고 식량을 수확합니다. 세금 수입은 제국을 운영하고 군대를 유지하는데 사용되며, 식량은 시민들과 군대를 먹여 살리는데 사용됩니다. 세금이나 식량이 고갈되지 않도록 항상 조심하세요. 돈이 부족하면 <?=guidelink('bank', '세계 은행')?>에서 빌려주지만, 식량이 부족하게 되면 치명적인 결과를 이르킵니다.</p>
<p>일단 제국을 건설하고 나면, 처음 시작하는 동안은 다른 제국들로 부터 보호받게 됩니다. 보호받는 기간중에는 다른 제국들이 공격해오지 못하며, 여러분도 또한 공격할 수 없습니다. 원조를 보내거나 받을수도 없고, 열린 시장에도 참여하지 못합니다. 일단 <?=TURNS_PROTECTION?> 턴을 사용하고 나면, 초보자 보호가 끝나고 다른 제국들의 공격에 노출되게 됩니다.</p>
<h2>상태 표시줄</h2>
<p>모든 페이지 위 쪽과 아래 쪽에는 상태 표시줄이 있습니다. 여러분의 제국의 상태를 간단하게 확인할 수 있는 줄 입니다:</p>
<dl>
    <dt><?=lang('STATBAR_MAILBOX')?></dt>
        <dd>여러분의 <?=guidelink('messages', '편지함')?>입니다. 새 편지가 오면 "<b><?=lang('STATBAR_NEWMAIL')?></b>"로 바뀌게 됩니다.</dd>
    <dt><?=lang('ROW_TURNS')?></dt>
        <dd>지금 사용할 수 있는 남은 턴의 숫자입니다.</dd>
    <dt><?=lang('ROW_CASH')?></dt>
        <dd>현재 보유한 현금의 양입니다. <?=guidelink('bank','세계 은행')?>에 맡긴 예금은 포함하지 않습니다.</dd>
    <dt><?=lang('ROW_LAND')?></dt>
        <dd>현재 보유한 땅의 크기입니다.</dd>
    <dt><?=lang($era->runes)?></dt>
        <dd><?=lang($era->trpwiz)?>들이 주술을 사용할 때 쓰는 마법 힘입니다.</dd>
    <dt><?=lang($era->food)?></dt>
        <dd>현재 보유한 식량의 양입니다.</dd>
    <dt><?=lang('ROW_HEALTH')?></dt>
        <dd>시민과 군대의 행복도와 건강입니다.</dd>
    <dt><?=lang('ROW_NETWORTH')?></dt>
        <dd>제국이 보유한 총 자산을 합해서 계산한 제국의 가치입니다.</dd>
</dl>
<?
}
?>
