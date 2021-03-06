<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/scores.php $
 * $Id: scores.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'scores', 'g_scores', 'Scores List');
function g_scores ()
{
?>
<h2>Scores List</h2>
<p>This page lists the top 10 empires in the game, as well as up to 30 empires ranked near your own. Each empire is color-coded to indicate its current status:</p>
<dl>
    <dt><span class="mprotected">Protected</span></dt>
        <dd>Empires in this color are protected from being attacked by other empires, either due to not having left New Player Protection or from having gone on vacation.</dd>
    <dt><span class="mdead">Dead</span></dt>
        <dd>Once an empire has been destroyed, it is shown in this color.</dd>
    <dt><span class="mclan">Clanmate</span></dt>
        <dd>Denotes empires which are members of your current clan.</dd>
    <dt><span class="mally">Ally</span></dt>
        <dd>Empires belonging to a clan allied with your own appear in this color.</dd>
    <dt><span class="mwar">War</span></dt>
        <dd>If your clan has declared war on another clan, its members will be listed in this color.</dd>
    <dt><span class="mdisabled">Locked</span></dt>
        <dd>These empires have been disabled by the Administration for violating the established Rules.</dd>
    <dt><span class="madmin">Administrator</span></dt>
        <dd>These empires are responsible for keeping the game running smoothly. To preserve game balance, they cannot be attacked, nor can they interact with others (aside from private messaging). If you're experiencing technicall difficulties playing the game, these are the people to talk to.</dd>
    <dt><span class="mself">Yourself</span></dt>
        <dd>Your own empire is always displayed in this color, making it easier to locate yourself in the score list.</dd>
</dl>
<p>Each empire is listed in the table with the following statistics displayed:</p>
<dl>
    <dt><?=lang('COLUMN_RANK')?></dt>
        <dd>The empire's rank (based on networth), compared to all other empires in the game.</dd>
    <dt><?=lang('COLUMN_EMPIRE')?></dt>
        <dd>The empire's name and identification number.</dd>
    <dt><?=lang('COLUMN_LAND')?></dt>
        <dd>The total amount of land the empire occupies.</dd>
    <dt><?=lang('COLUMN_NETWORTH')?></dt>
        <dd>A calculated number indicating the empire's overall value.</dd>
<?	if (CLAN_ENABLE) { ?>
    <dt><?=lang('COLUMN_CLAN')?></dt>
        <dd>Any clan the empire is currently a member of (shown as "None" otherwise).</dd>
<?	} ?>
<?	if (SCORE_ENABLE) { ?>
    <dt><?=lang('COLUMN_SCORE')?></dt>
        <dd>The empire's current score, influenced by their combat statistics.</dd>
<?	} ?>
    <dt><?=lang('COLUMN_KILLS')?></dt>
        <dd>How many other empires this empire has successfully destroyed.</dd>
    <dt><?=lang('COLUMN_RACE')?></dt>
        <dd>The race of the empire's inhabitants.</dd>
    <dt><?=lang('COLUMN_ERA')?></dt>
        <dd>The time period in which the empire exists.</dd>
</dl>
<p>Rankings on this page are updated every <?=TURNS_FREQ?> minutes.</p>
<?
}
?>
