<?php
/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     compiler_xoAppUrl.php
 * Type:     compiler
 * Name:     xoAppUrl
 * Purpose:  網站的目錄
 * -------------------------------------------------------------
 */
function smarty_compiler_xoAppUrl($argStr, &$smarty)
{
  $argStr[0] = str_replace("'", "", $argStr[0]);
  return WEB_URL."/".$argStr[0];
}
