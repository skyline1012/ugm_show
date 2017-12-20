<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     compiler_xoImgUrl.php
 * Type:     compiler
 * Name:     xoImgUrl
 * Purpose:  佈景的目錄
 * -------------------------------------------------------------
 */
function smarty_compiler_xoImgUrl($argStr, &$smarty)
{
	global $WEB;
	if($argStr){
	  $argStr[0] = str_replace("'", "", $argStr[0]);
	  $argStr[0] = $argStr[0] ? $argStr[0]:"";
	}else{
		$argStr[0] = "";
	}
  return  WEB_URL . '/templates/' . $WEB['theme_name'] . "/".$argStr[0];
}
