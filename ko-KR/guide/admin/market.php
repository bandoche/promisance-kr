<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/admin/market.php $
 * $Id: market.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

if ($adminflag & UFLAG_ADMIN)
	guidepage($topic, 'admin/market', 'g_admin_market', 'Market Cleanup');
function g_admin_market ()
{
?>
<h2>Market Cleanup</h2>
<p>Though QM Promisance 4.0 is less susceptible to players flooding the market with small sets of items to inconvenience others trying to make purchases, such actions can still result in degraded performance. From this page, it is possible to view all items currently for sale on the Public Market and remove any selected items.</p>
<p>If the "<?=lang('ADMIN_MARKET_RETURN')?>" option is checked, the items removed will be returned to the empires who placed them for sale, minus a percentage determined by their selling price (as normally happens when players recall their items manually or they are removed automatically); otherwise, the items are simply deleted and lost forever.</p>
<?
}
?>
