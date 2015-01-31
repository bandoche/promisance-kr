<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/clanforum.php $
 * $Id: clanforum.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

if (CLAN_ENABLE)
	guidepage($topic, 'clanforum', 'g_clanforum', '클랜 토론장');
function g_clanforum()
{
	global $era;
?>
<h2>클랜 토론장</h2>
<p>클랜에 소속된 모든 국가들은 토론장에서 전략이나 협동 계획에 대해서 이야기 할 수 있습니다.</p>
<p>토론장에서 사용할 수 있는 글자 효과들은 <?=guidelink('messages', '편지 도움말')?>을 보시면 자세하게 알 수 잇습니다.</p>
<h3>목차</h3>
<p>토론장의 목차에서는 모든 글타래들의 목록을 볼 수 있습니다. 원하는 글타래를 선택하면 해당하는 게시글들을 보실 수 있습니다.</p>
<p>글타래의 가장 위에는 항상 "<?=lang('CLANFORUM_ICON_NEWS')?>"이(가) 달린 <b><?=lang('CLANFORUM_SUBJECT_NEWS')?></b> 글타래 입니다. 가장 최근에 게시글이 달린 글타래가 모든 클랜원들의 첫 번째 화면에 나타납니다.</p>
<p>그 아래에는, "<?=lang('CLANFORUM_ICON_STICKY')?>"이(가) 달린 고정된 글타래가 가장 최근 글의 순서로 나타납니다. 그 아래에 일반적인 글타래들이 최근 글이 달린 순서대로 나타납니다.</p>
<p>"<?=lang('CLANFORUM_ICON_LOCKED')?>"이(가) 달려있는 잠긴 글타래들은 Leader and Assistant Leader, henceforth referred to as Moderators.</p>
<p>클랜의 누구라도 화면 아래에 있는 입력란을 이용해서 새 글타래를 만들 수 있습니다.</p>
<h3>글타래 보기</h3>
<p>Moderators는 어떠한 모든 게시글을 편집하거나 삭제할 수 있습니다. 하지만 일반 사용자들은 자신이 쓴 글만 수정하거나 삭제할 수 있고, 답글이 달려있는 경우에는 삭제할 수 없습니다.</p>
<p>각 글타래의 첫 번째 게시글을 수정하면 해당 글타래의 제목도 바뀌게 됩니다. 그리고 Moderators들은 해당 글타래를 고정 글타래나 잠긴 글타래로 만들 수 있습니다.</p>
<p>첫 번째 게시글을 삭제하게 되면 해당 글타래의 게시글이 모두 삭제됩니다. 하지만 <?=lang('CLANFORUM_SUBJECT_NEWS')?> 글타래에서는 글타래를 삭제할 수 없기 때문에 첫 번째 게시글만 삭제됩니다.</p>
<p><b><?=lang('CLANFORUM_SUBMIT_QUOTE')?></b>을(를) 누르면 해당하는 내용을 아래에 있는 입력란에 인용해서 글을 작성할 수 있습니다.</p>
<p>클랜의 Leader, Assistant Leader, 그리고 Ministers of Foreign Affairs만 <?=lang('CLANFORUM_SUBJECT_NEWS')?> 글타래에 글을 쓸 수 있습니다.</p>
<?
}
?>
