<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/lottery.php $
 * $Id: lottery.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'lottery', 'g_lottery', 'The Lottery');
function g_lottery ()
{
	global $era;
?>
<h2>The Lottery</h2>
<p>The world provides a lottery from which empires may win large amounts of money. The lottery's jackpot begins at <?=money(LOTTERY_JACKPOT)?> and increases as people purchase tickets.</p>
<p>Every day, each empire can buy up to <?=LOTTERY_MAXTICKETS?> tickets, giving them a chance to win the jackpot.</p>
<p>Once each day, a random ticket number is selected; if there is a winner, the empire will be featured on the lottery page, but if no empire has purchased the selected ticket, the jackpot will simply continue to grow.</p>
<p>In order to protect those who win the lottery, prize money is not delivered until the owner logs in, at which point they may deposit it in the bank or use it to purchase goods.</p>
<?
}
?>
