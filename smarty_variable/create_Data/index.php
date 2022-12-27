<?php
include('../../libs/Smarty.class.php');

$smarty = new Smarty;

// create data object with its private variable scope
$data = $smarty->createData();

// assign variable to data scope
$data->assign('foo','bar');

// create template object which will use variables from data object
$tpl = $smarty->createTemplate('template.tpl',$data);

// display the template
$tpl->display();
?>