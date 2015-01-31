<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/pubmarketsell.php $
 * $Id: pubmarketsell.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'pubmarketsell', 'g_pubmarketsell', '열린 시장 - 판매');
function g_pubmarketsell ()
{
	global $era;
?>
<h2>열린 시장 - 판매</h2>
<p>While the private market is a convenient place to rid yourself of excess food and equipment, you likely will not be well compensated. Using the public market, you can sell your goods to other empires willing to purchase them, often at much better prices.</p>
<p>Once you place items on the public market, they will take <?=PUBMKT_START?> hour(s) to reach the marketplace and become available for sale.<?
	if (PUBMKT_MINTIME >= 0)
	{
?> After they have been on sale for at least <?=PUBMKT_MINTIME?> hours, you will be allowed to remove them at your own discretion.<?
	}
	if (PUBMKT_MAXTIME >= 0)
	{
?> Items are automatically removed from the market and returned to your empire after <?=PUBMKT_MAXTIME?> hours.<?
	}
	if ((PUBMKT_MINTIME < 0) && (PUBMKT_MAXTIME < 0))
	{
?> Once placed on the market, items cannot be recalled - they will remain on the market until they are purchased by another empire.<?
	}
?></p>
<p>The market coalition collects a 5% commission on all market sales, subtracted from the amount paid by the buyer. If goods fail to sell on the market and are returned, a percentage of those remaining will be kept by the market coalition as payment for their services.</p>
<p>Be wary about selling during times of war, because the market coalition does not concern itself with inter-empire relations and will gladly sell your goods to your enemies.</p>
<?
}
?>
