<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/bank.php $
 * $Id: bank.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'bank', 'g_bank', '세계 은행');
function g_bank ()
{
	global $era;
?>
<h2>세계 은행</h2>
<p>세계 은행은 여러분의 돈이 넉넉하거나 부족할 때 저축이나 대출을 해줍니다. </p>
<p>여러분이 세계 은행에 저축하거나 대출 받을 수 있는 최대 금액은 여러분 제국의 총 가치가 결정합니다.</p>
<p>저축 이자는 <?=percent(BANK_SAVERATE)?>에서, 대출 이자는 <?=percent(BANK_LOANRATE)?>에서 시작합니다.</p>
<p>그리고 여러분의 제국이 성장하거나, 은행에서 거래하는 금액이 커질수록, 저축 이자는 줄어들고 대출 이자는 늘어납니다.</p>
<p>만약 여러분의 제국을 운영하는 비용이 부족해지면, 은행에서 자동으로 대출을 받게되고, 은행은 여러분을 존중하는 차원에서 평소의 대출 한계의 두 배 까지 빌려줍니다.</p>
<p>그리고 해당 판의 마지막 주에는, 여러분은 대출을 더이상 받을 수 없습니다.</p>
<?
}
?>
