<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;


//assign a loop.
//this loop runs incrementn order.
//1 to 7 not 7 to 1 so there for it generates no iterations.
$smarty->assign('start',7);
$smarty->assign('to',1);

$smarty->display('template.tpl');

?>