<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

$n = 'Dravinanshu Mishra';

//amount

$am = 2000;

$smarty->assign('name',$n);
$smarty->assign('amount',$am);

$smarty->display('template.tpl');
?>