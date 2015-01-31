<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/graveyard.php $
 * $Id: graveyard.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'graveyard', 'g_graveyard', 'The Graveyard');
function g_graveyard ()
{
?>
<h2>The Graveyard</h2>
<p>Whenever an empire is destroyed or abandoned, it is removed from the Scores list and moved to the Graveyard. Each empire is listed with the following statistics:</p>
<dl>
    <dt><?=lang('COLUMN_EMPIRE')?></dt>
        <dd>The empire's name and identification number.</dd>
    <dt><?=lang('COLUMN_LAND')?></dt>
        <dd>The total amount of land the empire occupied prior to its deletion. If the empire was destroyed in combat, this number will be 0.</dd>
    <dt><?=lang('COLUMN_NETWORTH')?></dt>
        <dd>A calculated number indicating the empire's overall value.</dd>
<?	if (CLAN_ENABLE) { ?>
    <dt><?=lang('COLUMN_CLAN')?></dt>
        <dd>Any clan the empire was a member of (shown as "None" otherwise).</dd>
<?	} ?>
    <dt><?=lang('COLUMN_RACE')?></dt>
        <dd>The race of the empire's inhabitants.</dd>
    <dt><?=lang('COLUMN_ERA')?></dt>
        <dd>The time period in which the empire existed.</dd>
    <dt><?=lang('COLUMN_DEATH')?></dt>
        <dd>The event which resulted in the empire's deletion - Killed (by another empire), <?=lang('GRAVEYARD_LABEL_SUICIDED')?> (used "Delete Account"), or <?=lang('GRAVEYARD_LABEL_ABANDONED')?> (failed to login and play over an extended period of time). For empires killed in combat, this will indicate the empire<?if (CLAN_ENABLE) echo ' (and clan)';?> which dealt the final blow.</dd>
</dl>
<?
}
?>
