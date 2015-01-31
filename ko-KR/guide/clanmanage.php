<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/clanmanage.php $
 * $Id: clanmanage.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

if (CLAN_ENABLE)
	guidepage($topic, 'clanmanage', 'g_clanmanage', '클랜 관리');
function g_clanmanage()
{
	global $era;
?>
<h2>클랜 관리</h2>
<p>만약 당신이 클랜을 만들었거나 권한을 가지고 있다면, 클랜 관리 창에서 이 곳으로 오셨을겁니다.</p>
<h3>대외 관계</h3>
<p>여기에서는 여러분들이 원하는데로 다른 제국들에게 동맹을 요청하거나 전쟁을 선포할 수 있습니다. 또한 현재 다른 제국들과의 관계도 나타나며 원한다며 그 관계를 바꿀 수 있습니다.</p>
<p>주의해야 될 점은 대외 관계를 바꾸게되면 관계있는 다른 제국들의 Leader에게 소식이 전달된다는 것 입니다. 그러니까 바꾸기 전에 잘 생각하고 마음을 확실하게 정해세요.</p>
<h4>동맹</h4>
<p>클랜과의 동맹을 유지하면서 당신의 By forming an alliance with another clan, your clan members will be allowed to send an unlimited amount of foreign aid shipments to members of your ally clan. You will also be prevented from attacking members of ally clans, as such an incident would be quite embarrassing.</p>
<p>Once you request an alliance with another clan, an appropriate leader of the other clan must accept it before it will take effect. Once in effect, either clan can terminate the alliance at will.</p>
<h4>Wars</h4>
<p>Declaring war with another clan provides several tactical advantages when attacking or casting spells on its members: relative size differences are ignored, <?if (MAX_ATTACKS > 0) echo 'attack limits are bypassed, ';?> and a 20% offensive power bonus is granted.</p>
<p>Be warned that, by declaring war with another clan, the other clan will automatically be placed at war with you as well, immediately giving them the same advantages against you.</p>
<p>Only the clan which began the war can propose a treaty to end it, at which point originating clan members are no longer considered to be at war while enemy clan members are still considered hostile; if the other clan accepts, the war ends, but if the other clan refuses, then it will be as if they had declared war on your clan - now, only they will be able to propose peace.</p>
<h3>Member Permissions</h3>
<p>From this section, a clan's Leader or Assistant Leader can assign special roles to other clan members.</p>
<p>The "Leader" role is allowed to perform any action in the clan - relations can be changed, roles assigned, and clan properties edited.</p>
<p>The "Assistant Leader" role has many of the same privileges, excepting that he cannot change his own role or the role of Leader.</p>
<p>The two "Minister of Foreign Affair" roles are permitted only to change relations and post clan news.</p>
<h3>Clan Properties</h3>
<p>From this section, a clan's password, title, logo image, and homepage location can be changed.</p>
<?
}
?>
