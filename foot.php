<?php
#指定模版存放目錄
$smarty->template_dir = WEB_PATH . '/templates/' . $WEB['theme_name'] . "/";
#定義模板URL 
$smarty->assign("xoImgUrl", WEB_URL . '/templates/' . $WEB['theme_name']."/"); 
$smarty->assign("xoAppUrl", WEB_URL."/"); 
#除錯開關 
$smarty->assign("debug", false);

/*---- 程式結尾-----*/
$smarty->display('theme.tpl');
/*---- 程式結尾-----*/
