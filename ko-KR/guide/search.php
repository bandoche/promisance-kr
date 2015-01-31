<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/search.php $
 * $Id: search.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'search', 'g_search', '제국 검색');
function g_search ()
{
?>
<h2>제국 검색</h2>
<p>게임이 커지게 되면 특정 제국을 바로 찾는것이 쉽지 않습니다. 그럴 때 검색기능을 이용하면 아래와 같은 정보를 바탕으로 검색할 수 있습니다:</p>
<dl>
    <dt>제국 ID</dt>
        <dd>원하는 ID 번호를 가진 제국이 검색됩니다. ID로 검색을 원하지 않으면 0을 입력하시면 됩니다.</dd>
    <dt>제국 이름</dt>
        <dd>원하는 제국의 이름을 입력하시면 됩니다. 빈칸으로 두게되면 이름으로 검색하지 않습니다.</dd>
<?	if (CLAN_ENABLE) { ?>
    <dt>클랜</dt>
        <dd>해당 클랜에 소속된 제국을 검색합니다.</dd>
<?	} ?>
    <dt>Race</dt>
        <dd>Only empires of the specified race will be listed. This filter can be disabled by selecting "Any Race".</dd>
    <dt>Era</dt>
        <dd>Only empires in the specified era will be listed. This filter can be disabled by selecting "Any Era".</dd>
    <dt>Minimum Networth</dt>
        <dd>If checked, only empires having a networth greater than or equal to this value will be listed.</dd>
    <dt>Maximum Networth</dt>
        <dd>If checked, only empires having a networth less than or equal to this value will be listed.</dd>
    <dt>Exclude Offline 제국s</dt>
        <dd>If checked, only empires whose owners are currently logged in will be listed.</dd>
    <dt>Exclude Dead 제국s</dt>
        <dd>If checked, only empires having at least one acre of land will be listed.</dd>
</dl>
<p>The resulting empires can be sorted in the following ways:</p>
<dl>
    <dt>Networth</dt>
        <dd>Orders empires by networth, descending.</dd>
    <dt>Land</dt>
        <dd>Orders empires by their size in acres, descending.</dd>
    <dt>Name</dt>
        <dd>Orders empires by their names, alphabetically.</dd>
    <dt>제국 ID</dt>
        <dd>Orders empires by their ID numbers, ascending.</dd>
<?	if (CLAN_ENABLE) { ?>
    <dt>Clan Membership</dt>
        <dd>Orders empires by their clan affiliation, based on the order in which the clans were founded.</dd>
<?	} ?>
<?	if (SCORE_ENABLE) { ?>
    <dt>Score</dt>
        <dd>Orders empires by their current score rating, descending.</dd>
<?	} ?>
    <dt>Race</dt>
        <dd>Groups empires by their race.</dd>
    <dt>Era</dt>
        <dd>Orders empires by their current era, chronologically.</dd>
</dl>
<p>Search results are displayed in the same basic format as the <?=guidelink('scores', 'Scores List')?>, but with additional columns to indicate each empire's statistics for offensive and defensive actions.</p>
<p>A maximum of 25 empires will be displayed in the search results.</p>
<?
}
?>
