<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/pvtmarketsell.php $
 * $Id: pvtmarketsell.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'pvtmarketsell', 'g_pvtmarketsell', '암시장 - 판매');
function g_pvtmarketsell ()
{
	global $era;
?>
<h2>암시장 - 판매</h2>
<p>비록 가격은 많이 저렴하지만, 여러분이 암시장에서 물건을 언제나 구입 할 수 있는 것 처럼, 암시장에서 물건을 바로 팔 수 있습니다.</p>
<p>또한 암시장에서 구입하는 경우와 마찬가지로, 시장에서의 병사들의 가격은 여러분의 제국이 보유한 <?=lang($era->bldcash)?>, <?=lang($era->bldcost)?>의 수에 의해 최대 50% 까지 올라갑니다.</p>
<p>한 번에 암시장에서 팔 수 있는 병사들의 수는 여러분이 보유한 병사들의 최대 <?=PVTM_MAXSELL/100?>% 까지 가능합니다. 더 기다리면 남은 병사들을 또 처리할 수 있습니다.</p>
<?
}
?>
