<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

$datas = array(1,2,3,4,5,6,7);

$smarty->assign('data', $datas);

$smarty->display('template.tpl');
?>