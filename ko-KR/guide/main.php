<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/main.php $
 * $Id: main.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'main', 'g_main', '제국의 간단한 정보');
function g_main ()
{
	global $era, $adminflag;
?>
<h2>제국의 간단한 정보</h2>
<p>여러분이 접속해서 로그인 하면 가장 먼자 만나는 페이지입니다. 이 곳에서는 당신의 제국의 전체적인 상태, 최근의 사건들 그리고 여러분이 언제 다음턴을 받을 시간을 확인할 수 있습니다.</p>
<?	if (EMPIRES_PER_USER > 1) { ?>
<p>만약 여러분에게 여러개의 제국이 있다면, 목록에서 원하는 제국을 선택하여 게임을 즐기면 됩니다.</p>
<?	} ?>
<?	if ($adminflag) { ?>
<p>Moderator나 Administrator인 여러분에게는 게임을 할 수 있는 몇 가지 페이지의 링크가 더 나타나게 됩니다.</p>
<?	} ?>
<p>페이지 중간에는 여러분의 제국의 중요한 정보들이 나타납니다:</p>
<dl>
    <dt><?=lang('ROW_TURNS')?></dt>
        <dd>여러분이 지금 사용할 수 있는 턴의 수가 나타납니다. (괄호 안에는 최대로 모아둘 수 있는 턴의 수가 나타납니다.)</dd>
    <dt><?=lang('ROW_STOREDTURNS')?></dt>
        <dd>여러분이 저장해 둘 수 있는 턴의 수가 나타납니다. 지금 사용할 수 있는 턴이 다 차면 저장된 턴으로 넘어옵니다. (괄호 안에는 최대로 저장해 둘 수 있는 턴의 수가 나타납니다.) <?=guidelink('intro', '소개')?> 페이지에서 자세한 내용을 확인하세요.</dd>
    <dt><?=lang('ROW_RANK')?></dt>
        <dd>총 가치 순서로 매긴 순위에서 기록한 등수입니다.</dd>
    <dt><?=lang($era->peasants)?></dt>
        <dd>현재 당신의 제국의 인구입니다.</dd>
    <dt><?=lang('ROW_LANDACRES')?></dt>
        <dd>당신의 제국이 가진 땅의 넓이입니다.</dd>
    <dt><?=lang('ROW_CASH')?></dt>
        <dd>보유한 현금 양입니다. <?=guidelink('bank','세계 은행')?>의 예금은 포함되지않습니다.</dd>
    <dt><?=lang($era->food)?></dt>
        <dd>비축해둔 식량의 양 입니다. 식량이 부족해지면 시민들과 군대가 굶게됩니다!</dd>
    <dt><?=lang($era->runes)?></dt>
        <dd><?=lang($era->trpwiz)?>들이 사용할 수 있는 마법력의 총 합입니다.</dd>
    <dt><?=lang('ROW_NETWORTH')?></dt>
        <dd>당신의 제국이 가지고 있는 가치있는 자산들을 전부 더해서 계산한 제국의 총 가치입니다.</dd>
    <dt><?=lang('COLUMN_ERA')?></dt>
        <dd>당신의 제국이 존재하고 있는 <?=guidelink('eras', '시대')?>입니다.</dd>
    <dt><?=lang('COLUMN_RACE')?></dt>
        <dd>시민들의 <?=guidelink('races', '종족')?>입니다.</dd>
    <dt><?=lang('ROW_HEALTH')?></dt>
        <dd>시민들과 군대의 건강한 정도와 행복한 정도입니다.</dd>
    <dt><?=lang('ROW_TAX')?></dt>
        <dd>시민들의 행복도와 정부의 수입에 영향을 주는 세율입니다.</dd>
    <dt><?=lang($era->trparm)?>, <?=lang($era->trplnd)?>, <?=lang($era->trpfly)?>, <?=lang($era->trpsea)?></dt>
        <dd>현재 군대에서 유지하고 있는 병력입니다.</dd>
    <dt><?=lang($era->trpwiz)?></dt>
        <dd>현재 배치된 마법사들의 숫자입니다.</dd>
</dl>
<p>이 표 아래에는 여러분이 설정한 시간대에 맞는 게임의 현재 시간과, 언제 시작하거나 끝나는지등에 관한 현재 판의 상태, 몇 분 마다 턴을 주는지, 그리고 다음 턴을 언제 받을지 등에 관한 정보가 나타납니다 .</p>
<p>그 아래에는 <?=guidelink('messages', '편지함')?>에 새 메시지가 왔는지, 몇 개의 메시지가 보관되어있는지 등의 상태를 보여줍니다.</p>
<p>만약 다른 제국이 여려분의 제국과 관계있는 일을 했다면 (열린 시장에서의 일이나, 클랜의 일, 또는 여러분을 공격한 경우 등) 아래의 사건 목록에 나타날것입니다. "<?=lang('MAIN_MARK_NEWS_READ')?>"를 누르면 최근의 사건 목록을 더 이상 아래에 출력하지 않습니다. 그리고 "<?=lang('MAIN_VIEW_NEWS_ARCHIVE')?>"를 누르면 최근 몇 일간 발생한 사건들을 다시 확인해 볼 수 있습니다.</p>
<?
}
?>
