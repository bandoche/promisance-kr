<?
/* QM Promisance - Turn-based strategy game
 * Copyright (C) 2001-2008 QMT Productions
 *
 * $URL: https://qmpromisance.svn.sourceforge.net/svnroot/qmpromisance/promisance/tags/release-4_0/lang/en-US.php $
 * $Id: en-US.php 1360 2009-01-01 21:27:41Z Quietust $
 */

if (!defined('IN_GAME') && !defined('IN_TURNS'))
	die("접근할 수 없습니다.");

$lang['ko-KR'] = array(
	// Display name for language (within Preferences)
	'LANG_ID'	=> '한글 (대한민국)',
	// Language code as reported in <html> tag
	'LANG_CODE'	=> 'ko-KR',
	// Text direction as reported in <html> tag
	'LANG_DIR'	=> 'ltr',
	// Location of additional strings for this language (within lang directory)
	// as well as guide pages (in "guide/" directory within this path)
	'LANG_PATH'	=> 'ko-KR/',
	// Various language-dependent string formatting routines
	'FUNC_FORMAT_LIST'	=> 'ko_kr_format_list',
	'FUNC_FORMAT_LABEL'	=> 'ko_kr_format_label',
	'FUNC_FORMAT_NUMBER'	=> 'ko_kr_format_number',
	'FUNC_FORMAT_PRENUM'	=> 'ko_kr_format_prenum',
	'FUNC_FORMAT_MONEY'	=> 'ko_kr_format_money',
	'FUNC_FORMAT_PERCENT'	=> 'ko_kr_format_percent',
	'FUNC_UNFORMAT_NUMBER'	=> 'ko_kr_unformat_number',
	'FUNC_TRUNCATE'		=> 'ko_kr_truncate',
);
function ko_kr_format_list ($list)
{
	if (count($list) == 0)
		return '';
	if (count($list) == 1)
		return array_shift($list);
	if (count($list) == 2)
		return array_shift($list) .' 그리고 '. array_shift($list);

	$out = '';
	while (count($list) > 1)
		$out .= array_shift($list) .', ';
	$out .= 'and '. array_shift($list);
	return $out;
}
function ko_kr_format_label ($label, $value = NULL)
{
	if (isset($value))
		return $label .': '. $value;
	else	return $label .':';
}
function ko_kr_format_number ($num)
{
	return number_format($num, 0, '.', ',');
}
function ko_kr_format_prenum ($num)
{
	return '#'. number_format($num, 0, '.', ',');
}
function ko_kr_format_money ($num)
{
	return '$'. number_format($num, 0, '.', ',');
}
function ko_kr_format_percent ($num, $decimal)
{
	return number_format($num, $decimal, '.', ',') .'%';
}
function ko_kr_unformat_number ($num)
{
	return str_replace(array('$', '#', '%', ','), '', $num);
}
function ko_kr_truncate ($str, $len)
{
	if (strlen($str) > $len)
		$str = substr($str, 0, $len - 3) .'...';
	return $str;
}
?>
