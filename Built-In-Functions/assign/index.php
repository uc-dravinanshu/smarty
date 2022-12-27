<?php
require("../../libs/Smarty.class.php");

$smarty = new Smarty;

//create an array for, {assign} function with math function.
$some_array = array();
$some_array['row']['some_value'] = 30;

$smarty->assign('some_array',$some_array);

$smarty->display('template.tpl');
?>