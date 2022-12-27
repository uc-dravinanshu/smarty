<?php
require('../../../libs/Smarty.class.php');

$smarty = new Smarty;

// array of 3000 to 3015
$id = range(3000,3015);
$smarty->assign('arr',$id);


$smarty->display('template.tpl');
?>