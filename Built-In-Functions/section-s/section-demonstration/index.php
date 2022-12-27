<?php
require('../../../libs/Smarty.class.php');

$smarty = new Smarty;

$id = array(1001,1002,1003);
$smarty->assign('custid',$id);

$fullnames = array('John Smith','Jack Jones','Jane Munson');
$smarty->assign('name',$fullnames);

$addr = array('253 Abbey road', '417 Mulberry ln', '5605 apple st');
$smarty->assign('address',$addr);

$smarty->display('template.tpl');

?>