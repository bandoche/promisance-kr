<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/admin/users.php $
 * $Id: users.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

if ($adminflag & UFLAG_ADMIN)
	guidepage($topic, 'admin/users', 'g_admin_users', 'Manage Users');
function g_admin_users ()
{
?>
<h2>User Account Management</h2>
<p>This page allows Administrators to view a list of all currently registered accounts and perform various operations on them.</p>
<p>A table lists several properties for all existing user accounts:</p>
<dl>
    <dt><?=lang('COLUMN_ADMIN_USERID')?></dt>
        <dd>The user account's ID number.</dd>
    <dt><?=lang('COLUMN_ADMIN_NICKNAME')?></dt>
        <dd>The name filled in when this user account was created.</dd>
    <dt><?=lang('COLUMN_ADMIN_USERNAME')?></dt>
        <dd>The account's username (as used during login).</dd>
    <dt><?=lang('COLUMN_ADMIN_EMAIL')?></dt>
        <dd>The E-mail address under which this account was registered.</dd>
    <dt><?=lang('COLUMN_ADMIN_IPADDR')?></dt>
        <dd>The last IP address from which this user account was accessed.</dd>
    <dt><?=lang('COLUMN_ADMIN_FLAGS')?></dt>
        <dd>Special properties of this user account. 'A' denotes an Administrator, 'M' denotes a Moderator, and 'D' denotes disabled accounts.</dd>
    <dt><?=lang('ADMIN_USERS_LABEL_EMPIRES')?></dt>
        <dd>Indicates how many empires associated with this user - the first number indicates live empires from the current round, the second number counts dead and deleted empires from the current round, and the third number represents empires recorded in history.</dd>
</dl>
<p>Clicking on a user's ID number will allow editing the account's details and viewing statistics. Most fields listed here are self-explanatory. Usernames and email addresses must be unique - it is not allowed for two users to have the same username or email address.</p>
<p>The following flags can be applied to user accounts:</p>
<dl>
    <dt><?=lang('ADMIN_USERS_EDIT_FLAG_ADMIN')?></dt>
        <dd>Grants full administrative access to the game, including the following abilities: edit and delete user accounts, edit and delete empires, edit clans, access the moderator mailbox, browse private messages, manage IP address bans, manage database locks, stop and start game rounds, and login as any empire without altering its idle time. You have this flag on your own user account - if you didn't, you wouldn't be reading this guide page.</dd>
    <dt><?=lang('ADMIN_USERS_EDIT_FLAG_MOD')?></dt>
        <dd>Grants limited administrative access to the game. Moderators can disable empires (but not edit them) and access the moderator mailbox. Administrators must also have this option set - without it, some administrative functions may not behave predictably.</dd>
    <dt><?=lang('ADMIN_USERS_EDIT_FLAG_DISABLE')?></dt>
        <dd>Disabled user accounts are not permitted to create new empires, though they will be allowed to login to any empires they have already created.</dd>
    <dt><?=lang('ADMIN_USERS_EDIT_FLAG_VALID')?></dt>
        <dd>Indicates that the user account has, at one point, validated its email address. This flag is not used in-game, but serves as an indicator to aid in pruning accounts which were created with invalid addresses.</dd>
</dl>
<p>If a user account has no links to the rest of the game (that is, if it has created no empires in the current round and has never been recorded in history), it can be deleted from the game's database in order to make its username and email address available to other players. Note that this option is irreversible - once an account is deleted, it cannot be restored. Once an account has been recorded in history, its username and email address can only be released by changing them to unusable dummy values (such as "userid@example.org" for an email address).</p>
<p>An additional form at the bottom of the page allows creating a new user account. The new account will be assigned a random username, name, and email address, and will be given the password "changeme". This can be performed even if signups are not currently allowed.</p>
<?
}
?>
