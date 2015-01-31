<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/manage.php $
 * $Id: manage.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'manage', 'g_manage', '제국 관리하기');
function g_manage ()
{
	global $era, $adminflag;
?>
<h2>여러분의 제국 관리하기</h2>
<p>여기에서는 여러분은 제국을 다스리는데 필요한 내용을 바꿀 수 있습니다.</p>
<h3>변신</h3>
<p>만약 여러분이 판단하기에 여러분이 원하는 목표를 이루는데 지금의 종족이 마음에 들지 않는 경우에는, 최후의 선택으로 다른 종족으로 변신할 수 있습니다. 하지만 그에 따른 부작용이 발생하니 조심하여야됩니다.</p>
<p>일단 변신하기 위해서는 <?=lang($era->trpwiz)?>이(가) 충분하여야 되고, 최소 <?=TURNS_INITIAL?> 턴이 필요하며, 건강이 75% 이상이 되어야됩니다.</p>
<p>또한 변신하는 과정에서 발생하는 에너지로 인구와 군대가 10% ~ 15% 정도 감소하고, 건축물들의 35% 정도가 파괴되며, <?=lang('ROW_CASH')?>과 <?=lang($era->food)?>, 그리고 <?=lang($era->runes)?>들이 혼돈의 과정에서 15% ~ 45% 정도 사라집니다. <?=TURNS_INITIAL?> 턴이 지나고 나면 건강이 50% 정도 줄어있습니다.</p>
<p>참고 : 만약 여러분이 가입하는 과정에서 종족을 잘못 선택했다면 한 턴도 쓰지 않은 상태에서는 <strong>자유롭게</strong> 종족을 바꿀 수 있습니다.</p>
<h3>세금</h3>
<p>세율은 시민들이 내는 세금 뿐만 아니라 행복도에도 영향을 줍니다. 세율이 낮으면 더 많은 사람들이 이주해 오고, 세율이 높으면 시민들이 도망가게 되며 건강을 회복하는 속도를 느리게 합니다.</p>
<h3>산업 분배</h3>
<p>여러분이 건설한 <?=lang($era->bldtrp)?>에서 어떤 유닛을 얼마나 생산할것인지를 설정할 수 있습니다. 만약 같은 비율의 자원이 투입되게되면, <?=lang($era->trparm)?>, <?=lang($era->trplnd)?>, <?=lang($era->trpfly)?>와 <?=lang($era->trpsea)?> 생산 비율은 12:6:3:2 가 됩니다.</p>
<p>투입하는 자원의 합계가 100% 보다 낮다면 <?=lang($era->bldtrp)?>의 일부만 운영하게 됩니다. 여러분이 잠시 추가적인 군대를 운영할 자본이 안된다면 사용할 수 있는 좋은 방법입니다.</p>
<h3>휴가</h3>
<p>만약 어떤 이유에서건 여러분이 오랜 시간동안 접속을 할 수 없다면, 휴가를 떠나서 돌아 오기 전 까지 제국을 보호할 수 있습니다.</p>
<p>일단 휴가를 떠나게 되면 계정은 잠기게 되고, 휴가를 시작한지 <?=VACATION_START?> 시간이 지나면 제국은 보호받게 되어 아무도 공격이할 수 없게 됩니다. 하지만 같은 클랜원들과 공유한 병력이나 열린 시장에 올라온 물건은 계속 판매됩니다.</p>
<p>보호받은지 <?=VACATION_LIMIT?> 시간이 지나고 나서 부터는 휴가에서 돌아와서 다시 게임을 할 수 있습니다. Do note that once the final week of gameplay for the current round has begun, your empire will be <i>automatically</i> unlocked at the earliest opportunity (so as to prevent players from using vacation to protect their high rank).</p>
<h2>Managing your User Account</h2>
<p>Several account settings are also available on this page - these settings will persist between empires and between rounds.</p>
<?
	if ($adminflag == UFLAG_ADMIN)
	{ ?>
<p>Note that if you use the "Switch User" functionality to assume the identity of an empire owned by another user, these functions will <i>not</i> allow you to alter their user account - they will always apply to your own account instead. If you wish to modify someone else's user account, go to <?=guidelink('admin/users', 'User Account Administration')?>.</p>
<?	}
?>
<h3>Theme</h3>
<p>Depending on the game's setup, multiple color schemes may be available for you to choose from. Simply select the one you wish to use and press "Change Style". The new style should take effect immediately.</p>
<h3>Change Password</h3>
<p>If you believe your password has been compromised (or if you simply haven't changed it in a while), you may change your account password here - simply enter your desired new password twice.</p>
<h3>Timezone</h3>
<p>All in-game times are typically tracked in the time zone in which the game's server itself is located - if you are located in a different time zone and wish to display times as they would be in your area, simply select your time zone from the dropdown list and press "Change Timezone".</p>
<p>Each time this page is loaded, the current time will be displayed in your configured timezone. Note that Daylight Savings Time is not detected - when your local time switches to and from DST, you will need to update your account configuration accordingly.</p>
<h3>Language</h3>
<p>By default, QM Promisance is available in English only, but if your server administrator has installed any additional language packs, you may select one here and play the game in a different language.</p>
<?
}
?>
