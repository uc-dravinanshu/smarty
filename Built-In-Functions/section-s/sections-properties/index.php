<?php
require('../../../libs/Smarty.class.php');

$smarty = new Smarty;




$data = array(1001,1002,1003,1004,1005);
$smarty->assign('rows',$data);


$smarty->display('template.tpl');

?>