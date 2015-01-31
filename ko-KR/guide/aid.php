<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/aid.php $
 * $Id: aid.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

if (AID_ENABLE)
	guidepage($topic, 'aid', 'g_aid', '원조 지원 보내기');
function g_aid ()
{
	global $era;
?>
<h2>다른 나라에 원조 보내기</h2>
<p>만약 당신의 친구나 클랜 동료가 도움이 필요한 경우에는, <?=lang($era->trpsea)?>에 병력과 자원을 보낼 수 있습니다. 최대 <?=plural(AID_MAXCREDITS, 'SHIPMENTS_SINGLE', 'SHIPMENTS_PLURAL')?> 까지 보낼 수 있고, 매 시간마다 추가 병력을 보낼 수 있습니다.</p>
<p>한 번 원조를 보낼 때, 현재 사용 가능한 병력의 최대 20% 까지 <?=lang($era->trparm)?>, <?=lang($era->trplnd)?>, <?=lang($era->trpfly)?>, <?=lang($era->trpsea)?>, <?=lang('ROW_CASH')?>, <?=lang($era->runes)?>, 그리고 <?=lang($era->food)?>을(를) 다른 제국에 보낼 수 있습니다.</p>
<p>보내는 병력과 관계 없이, 수송을 위해서는 <?=lang($era->trpsea)?>이 움직여야 되며, 해당 병력의 양은 당신의 제국의 크기에 따라 달라집니다. 만약 여러분이 이보다 작은 병력을 보내게 된다면, 일단 병력이 이동하고 나면 남은 <?=lang($era->trpsea)?>들은 자동으로 돌아오게 됩니다.</p>
<p>원조는 정말 필요로 하는 곳에만 갈 수 있습니다. 여러분 제국의 총 가치보다 큰 제국에는 원조를 보낼 필요가 없습니다. 만약 여러분이 클랜에 속해있다면, 여러분은 클랜원들에게 여러분이 원하는 만큼 보낼 수 있습니다.</p>
<p>당연히 여러분이 전쟁중인 국가에는 원조를 보낼 수 없습니다.</p>
<?
}
?>
