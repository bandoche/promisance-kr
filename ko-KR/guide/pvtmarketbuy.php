<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/pvtmarketbuy.php $
 * $Id: pvtmarketbuy.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'pvtmarketbuy', 'g_pvtmarketbuy', '암시장 - 구매');
function g_pvtmarketbuy ()
{
	global $era;
?>
<h2>암시장 - 구매</h2>
<p>각각의 제국에는 전쟁용품을 판매하는 상인과 식량을 판매하는 상인이 있습니다. 여러분의 제국에서 <?=lang($era->bldtrp)?>, <?=lang($era->bldfood)?>의 기능이 부족하여 식량이 고갈될 경우에는 여기에서 구매하시면 됩니다.</p>
<p>한 번에 암시장에서 구매할 수 있는 양은 한정되어있습니다. 혹시 매진되었다고 하더라도 조금 기다리시면 다시 재고가 들어오게 됩니다. 여러분의 제국의 전체적인 규모와 <?=lang($era->bldcost)?>, <?=lang($era->bldfood)?>의 수에 따라서 물품이 재생산 되는 속도가 달라집니다.</p>
<p>암시장의 시세는 여러분의 제국의 경제력에 영향을 받습니다. 즉 <?=lang($era->bldcash)?>, <?=lang($era->bldcost)?>의 수에 따라서 가격이 40% 까지 저렴해집니다. 다만 슥량의 가격에는 영향을 주지 않습니다.</p>
<?
}
?>
