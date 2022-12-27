<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

$data = array(1000,1001,1002);
$smarty->assign('custid',$data);

$smarty->display('template.tpl');

?>