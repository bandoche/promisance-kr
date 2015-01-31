<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/ko-KR/guide/messages.php $
 * $Id: messages.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GUIDE'))
	die('Access denied');

guidepage($topic, 'messages', 'g_messages', '편지함');
function g_messages ()
{
?>
<h2>편지함</h2>
<p>편지함에서는 다른제국에게 개인적인 연락, 정보 교환이나 동맹 제안등의 편지를 보낼 수 있습니다.</p>
<p>받은 편지함에서는 여러분이 받은 편지들의 제목, 보낸 제국, 받은 날짜 등을 확인할 수 있습니다. 아직 읽지 않은 편지는 굵은 제목으로 확인할 수 있습니다. 보낸 편지함도 여러분이 보낸 편지를 같은 방법으로 보여줍니다. 상대방이 아직 읽지 않은 편지는 굵은 제목으로 나타납니다.</p>
<p>다른 제국에 편지를 보내기 위해서는, 우선 해당 <?=guidelink('scores', 'Top Scores')?>에서 제국의 번호를 확인해서 입력하고, 제목을 쓴 다음 편지의 내용을 써서 &quot;보내기&quot;를 누르시면 됩니다.</p>
<p>보낸 편지함과 받은 편지함에서 제목을 누르면 편지의 내용을 보여줍니다. 만약 받은 편지에 아직 답장을 하지 않았다면 답장 보내기 칸도 원래 편지 아래에 마련되며, &quot;인용하기&quot;를 누르면 원본 내용이 답장에 인용되어 들어갑니다. 또한 현재 읽고있는 편지가 다른 편지의 답장이라면, 위에서 원래 편지를 확인할 수 있습니다.</p>
<p>한번에 보낼 수 있는 편지는 최대 <?=MESSAGES_MAXCREDITS?>개 입니다. 또한 이 개수는 몇 분 지나면 다시 채워집니다. 다만 받은 편지에 답장하는것은 개수 제한이 없습니다.</p>
<p>만약 받은 편지가 정상적인 내용이 아니거나, 게임의 규칙에 맞지 않다고 생각하면, 아래에 있는 &quot;신고 하기&quot;를 눌러서 Moderators와 Administrators에게 알려주세요.</p>
<?
	$examples = array('[quote]A quotation[/quote]', '[center]Centered text[/center]', '[b]Bold text[/b]', '[i]Italic text[/i]', '[u]Underlined text[/u]', '[url]'. URL_HOMEPAGE .'[/url]', '[email]'. MAIL_VALIDATE .'[/email]', '[quote][center]Multiple [i]formatting [b]codes[/b][/i]<br />combined[/center][/quote]');
?>
<h3>글자 꾸미기</h3>
<table>
<?
	foreach ($examples as $text)
	{
?>
<tr><td><?=$text?></td>
    <td><?=bbencode($text)?></td></tr>
<?
	}
?>
</table>
<p>각각의 꾸밈틀들은 같은 것 끼리 겹칠 수 없으며(예 : 인용틀 안에 인용틀을 또 넣을 수 없습니다.), 모든 꾸밈틀은 순서에 맞게 닫혀져야됩니다. (예 : "[b][i]안녕하세요[/b][/i]"는 틀리지만, "[b][i]안녕하세요[/i][/b]"는 맞는 표현입니다).</p>
<p>또한 [<b>quote</b>]와 [<b>center</b>] 꾸밈틀은 [<b>b</b>]old/[<b>i</b>]talic/[<b>u</b>]nderline을 포함할 수 없으며, [<b>url</b>]/[<b>email</b>] 꾸밈틀을 안에 다른 꾸밈틀을 넣을 수 없습니다.</p>
<?
}
?>
