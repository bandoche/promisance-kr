<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/admin/empires.php $
 * $Id: empires.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

if ($adminflag & UFLAG_MOD)
	guidepage($topic, 'admin/empires', 'g_admin_empires', 'Manage Empires');
function g_admin_empires ()
{
?>
<h2>Manage Empires</h2>
<p>This page allows Moderators and Administrators to view a list of all currently created empires and perform various operations on them.</p>
<p>Links at the top of the page allow choosing whether to display linked (i.e. active) or unlinked (i.e. deleted) empires.</p>
<p>A table lists various properties for all empires and the user accounts to which they are attached:</p>
<dl>
    <dt><?=lang('COLUMN_ADMIN_USERID')?></dt>
        <dd>The ID number of the account which created this empire.</dd>
    <dt><?=lang('COLUMN_ADMIN_USERNAME')?></dt>
        <dd>The account's username (as used during login).</dd>
    <dt><?=lang('COLUMN_ADMIN_IPADDR')?></dt>
        <dd>The last IP address from which this user account was accessed.</dd>
    <dt><?=lang('COLUMN_ADMIN_EMPIREID')?></dt>
        <dd>The ID number of this empire.</dd>
    <dt><?=lang('COLUMN_ADMIN_EMPNAME')?></dt>
        <dd>The registered name of this empire as it appears in the Scores List.</dd>
<?	if (CLAN_ENABLE) { ?>
    <dt><?=lang('COLUMN_CLAN')?></dt>
        <dd>The clan this empire currently belongs to.</dd>
<?	} ?>
    <dt><?=lang('COLUMN_ADMIN_IDLE')?></dt>
        <dd>Elapsed time since the empire last logged in or viewed a page.</dd>
    <dt><?=lang('COLUMN_ADMIN_FLAGS')?></dt>
        <dd>Special properties of this empire. 'A' denotes Administrative empires, 'D' denotes pending deletion, 'I' denotes disabled empires, 'U' denotes flagged multies, 'V' denotes validated empires, 'N' denotes event notification (see below), and 'O' denotes empires currently online.</dd>
    <dt><?=lang('COLUMN_ADMIN_COMMENT')?></dt>
        <dd>If the empire was disabled, this field can indicate why it was disabled. When empires are automatically deleted, their reason for deletion will be shown here.</dd>
</dl>
<p>Each empire is listed with a particular <?=lang('ADMIN_EMPIRES_COLUMN_STATUS')?>, which can be one of the following:</p>
<dl>
    <dt><?=lang('ADMIN_STATUS_DELETED')?></dt>
        <dd>Empire has either deleted itself or has been deleted by an Administrator.</dd>
    <dt><?=lang('ADMIN_STATUS_ADMIN')?></dt>
        <dd>Empire is flagged as Administrative and is not allowed to interact with other empires.</dd>
    <dt>Disabled</dt>
        <dd>Empire has been locked for violation of rules (e.g. multiple account abuse, cheating, harrassing other users).</dd>
    <dt><?=lang('ADMIN_STATUS_MULTI')?></dt>
        <dd>Empire has been labeled as a multi (e.g. multiple people playing from the same computer), legitimate or not.</dd>
    <dt><?=lang('ADMIN_STATUS_DEAD')?></dt>
        <dd>Empire has been killed (i.e. reduced to 0 acres of land).</dd>
    <dt><?=lang('ADMIN_STATUS_VACATION')?></dt>
        <dd>Empire is on vacation (whether being protected or not).</dd>
    <dt><?=lang('ADMIN_STATUS_NEW')?></dt>
        <dd>Empire is newly registered and has not yet been validated.</dd>
    <dt><?=lang('ADMIN_STATUS_UNVALIDATED')?></dt>
        <dd>Empire has been prompted for its validation code but has not yet provided it.</dd>
    <dt><?=lang('ADMIN_STATUS_NORMAL')?></dt>
        <dd>Registered and validated empire.</dd>
    <dt>* (notify)</dt>
        <dd>Status values followed by "(notify)" indicate that the owner of the empire has been notified of a particular event (in this case, being Unvalidated or being Dead). In this state (as well as Vacation), an empire's Idle time will cease to update.</dd>
</dl>
<p>Empires can be modified by marking their checkboxes in the far right column and selecting one or more of the options at the bottom of the list:</p>
<dl>
    <dt>Multi</dt>
        <dd>Sets or clears the "Multi" flag on the selected empires.</dd>
    <dt>Disabled</dt>
        <dd>Sets or clears the "Disabled" flag on the selected empires. This also has the side effect of setting or clearing the "Notify" flag.</dd>
    <dt>Validated</dt>
        <dd>Sets or clears the "Validated" flag on the selected empires. This also has the side effect of clearing the "Notify" flag.</dd>
    <dt>Deleted</dt>
        <dd>Sets or clears the "Deleted" flag on the selected empires. When deleting, empire are marked as having been killed by whoever disabled them (and grants Kill credits accordingly); undeleting reverses this. Only Administrators can perform this function.</dd>
    <dt>Reason</dt>
        <dd>Allows assigning a comment to an empire, ideally a reason for disabling or deleting an account.</dd>
    <dt>Admin</dt>
        <dd>Sets or clears the "Administrative" flag on the selected empires. Empires with this flag are highlighted on Scores lists and cannot interact with other empires.<br />Only Administrators can perform this function.</dd>
    <dt>Linkage</dt>
        <dd>Severes or restores the link between the selected empires and their user accounts.<br />Only Administrators can perform this function.</dd>
    <dt>Set Owner</dt>
        <dd>Transfers ownership of the selected empires to the specified user account.<br />Only Administrators can perform this function.</dd>
</dl>
<p>Administrators can use an additional form at the bottom of the page to create a new empire attached to a specific user account. This can be performed even if signups are not currently allowed.</p>
<?
}
?>
