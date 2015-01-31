<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/status.php $
 * $Id: status.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'status', 'g_status', '자세한 정보');
function g_status ()
{
	global $era;
?>
<h2>자세한 상태 보기</h2>
<p>이 곳 에서는 여러분의 제국에 대한 상세한 통계와, 경제에 대해서 6개 부분으로 나누어 알려주고 있습니다:</p>
<h3><?=lang('STATUS_EMPIRE_HEADER')?></h3>
<dl>
    <dt><?=lang('ROW_TURNSUSED')?></dt>
        <dd>여러분의 제국이 생성되고 지금까지 사용한 턴 수 입니다.</dd>
    <dt><?=lang('ROW_CASH')?></dt>
        <dd>현재 사용할 수 있는 자금의 규모입니다.</dd>
    <dt><?=lang('ROW_RANK')?></dt>
        <dd>다른 제국들 중에서 총 가치에 의한 제국의 등수입니다.</dd>
    <dt><?=lang('ROW_NETWORTH')?></dt>
        <dd>여러분의 제국의 자산을 바탕으로 한 총 가치입니다. 땅, 돈, <?=lang($era->food)?>, 시민과 군사력등으로 평가되며 제국의 가치가 어느정도 되는지 간단하게 알 수 있습니다.</dd>
    <dt><?=lang('ROW_POPULATION')?></dt>
        <dd>여러분의 제국에 살 고 있는 <?=lang($era->peasants)?>의 수 입니다. <?=lang($era->peasants)?>은(는) 제국에서 돈을 버는데 꼭 필요합니다.</dd>
    <dt><?=lang('ROW_RACE')?></dt>
        <dd>여러분의 제국에 살 고 있는 거주자들의 <?=guidelink('races', '종족')?>입니다.</dd>
    <dt><?=lang('ROW_ERA')?></dt>
        <dd>여러분의 제국이 현재 존재하고 있는 <?=guidelink('eras', '시대')?>입니다.</dd>
</dl>
<h3><?=lang('STATUS_FOOD_HEADER')?></h3>
<dl>
    <dt><?=lang('STATUS_FOOD_PRODUCE')?></dt>
        <dd><?=lang($era->bldfood)?> 과(와) 사용하지 않는 땅에서 생산되어 시민과 군대에 공급되는 <?=lang($era->food)?>의 양을 나타냅니다. 매 턴 얼마나 생산될 지 추정되는 값입니다.</dd>
    <dt><?=lang('STATUS_FOOD_CONSUME')?></dt>
        <dd>당신의 군대와 <?=lang($era->peasants)?>, 그리고 <?=lang($era->trpwiz)?> 이(가) 필요로 하는 <?=lang($era->food)?>입니다. 매 턴 얼마나 소비될 지 추정되는 값입니다.</dd>
    <dt><?=lang('STATUS_FOOD_NET')?></dt>
        <dd>매 턴 마다 생산되고 소비되는 <?=lang($era->food)?>의 양을 합한 값 입니다. 시민들이 굶지 않게 하려면 이 값을 계속 확인하세요.</dd>
</dl>
<h3><?=lang('STATUS_FOREIGN_HEADER')?></h3>
<dl>
<?	if (CLAN_ENABLE) { ?>
    <dt><?=lang('STATUS_FOREIGN_CLAN')?></dt>
        <dd>만약 여러분이 클랜에 소속되어 있다면, 여기에 그 '태그'가 나타납니다. 만약 아무 클랜에도 소속되어있지 않다면 'None'이라고 나타납니다.</dd>
    <dt><?=lang('STATUS_FOREIGN_ALLIES')?></dt>
        <dd>여러분이 속한 클랜과 동맹인 클랜을 볼 수 있습니다.</dd>
    <dt><?=lang('STATUS_FOREIGN_WARS')?></dt>
        <dd>여러분이 속한 클랜과 전쟁중인 클랜을 볼 수 있습니다.</dd>
<?	} ?>
    <dt><?=lang('STATUS_FOREIGN_OFFENSE')?></dt>
        <dd>다른 제국을 공격한 회수입니다. 공격에 성공한 비율과 함께 표시됩니다.</dd>
    <dt><?=lang('STATUS_FOREIGN_DEFENSE')?></dt>
        <dd>다른 제국의 공격을 방어한 회수입니다. 방어에 성공한 비율도 함께 표시됩니다.</dd>
    <dt><?=lang('STATUS_FOREIGN_KILLS')?></dt>
        <dd>당신이 얼마나 많은 제국을 멸망시켰는지를 나타냅니다.</dd>
</dl>
<h3><?=lang('STATUS_LAND_HEADER')?></h3>
<p>각각의 건물이 당신의 제국 땅에 얼마나 많이 건설되었는지, 그리고 아직 사용하지 않는 땅이 얼마나 되는지 알려줍니다.</p>
<h3><?=lang('STATUS_CASH_HEADER')?></h3>
<dl>
    <dt><?=lang('STATUS_CASH_INCOME')?></dt>
        <dd>제국의 수익은 <?=lang($era->peasants)?>의 수, 1인 당 수입, 세금 비율과 전체적인 나라의 건강에 영향을 받습니다.</dd>
    <dt><?=lang('STATUS_CASH_EXPENSE')?></dt>
        <dd>제국의 지출은 군대 유지 비용과 땅 세금에 쓰입니다. <?=lang($era->bldcost)?>을(를) 더 지어서 비용을 줄일 수 있습니다.</dd>
    <dt><?=lang('STATUS_CASH_NET')?></dt>
        <dd>제국이 매 턴 수익과 지출의 합을 나타냅니다. 자금 부족이 발생하지 않기 위해서 이 값을 계속해서 확인하세요.</dd>
    <dt><?=lang('STATUS_CASH_LOANPAY')?></dt>
        <dd>만약 세계 은행으로 부터 돈을 빌렸다면, 해당 빚의 0.5%를 매 턴 마다 이자로 지불해야됩니다. 다음 턴에 지불할 이자 비용이 이 값입니다.</dd>
    <dt><?=lang('STATUS_CASH_PERCAP')?></dt>
        <dd>인구 1인당 수익입니다. 매 턴 마다 제국에 있는 <?=lang($era->peasants)?>이(가) 돈을 얼마나 버는지를 알 수 있습니다. 이 값은 세율오 결정됩니다.</dd>
    <dt><?=lang('STATUS_CASH_SAVINGS')?></dt>
        <dd>세계 은행에 저축해둔 금액을 나타냅니다. 해당 이자율도 괄호안에 함께 나타납니다.</dd>
    <dt><?=lang('STATUS_CASH_LOAN')?></dt>
        <dd>세계 은행에서 대출한 금액을 나타냅니다. 해당 이자율도 괄호안에 함께 나타납니다.</dd>
</dl>
<h3><?=lang('STATUS_MILITARY_HEADER')?></h3>
<p>현재 군사의 수를 보여줍니다.</p>
<dl>
    <dt><?=lang('STATUS_MILITARY_OFFPOWER')?></dt>
        <dd>당신의 제국이 보유한 군대의 총 공격력을 나타냅니다. (<?=guidelink('military', '군사 유닛')?>을 참고하세요).</dd>
    <dt><?=lang('STATUS_MILITARY_DEFPOWER')?></dt>
        <dd>당신의 제국이 보유한 군대의 총 방어력을 나타냅니다.</dd>
</dl>
<?
}
?>
