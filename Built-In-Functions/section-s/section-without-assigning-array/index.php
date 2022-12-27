<?php
require('../../../libs/Smarty.class.php');

$smarty = new Smarty;

//indexed array. 

$arr = array(1,2,3,4,5,6,7);
$smarty->assign('data_array',$arr);

$smarty->display('template.tpl');

?>