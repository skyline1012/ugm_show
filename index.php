<?php
/* 引入檔頭，每支程都會引入 */
require_once 'head.php';
#佈景目錄
$WEB['theme_name'] = "admin";
#網頁標題
$WEB['theme_title'] = "首頁";

/* 過濾變數，設定預設值 */
$op = system_CleanVars($_REQUEST, 'op', 'opList', 'string');
$sn = system_CleanVars($_REQUEST, 'sn', '', 'int');

/* 程式流程 */
switch ($op){
	default:
		$op = "opList";
		break;	
}

/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);

/*---- 引入檔尾----*/
require_once 'foot.php';

/*---- 函數區-----*/

