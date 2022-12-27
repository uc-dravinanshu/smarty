<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

//index array.

$data_array = array(1,2,3,4,5,6,7);

print_r($data_array);

$smarty->assign('foo',$data_array);

$smarty->display('template.tpl');

?>