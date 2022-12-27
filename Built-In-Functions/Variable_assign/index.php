<?php
require('../../libs/Smarty.class.php');
$smarty = new Smarty;


//assign with math.
$some_array = array();
$some_array['row']['some_value'] = 10;

//create an array.
$user = array();
$user['row'] = 'Dravinanshu';

$smarty->assign('some_array',$some_array);
//
$smarty->assign('user',$user);

$smarty->display('emplate.tpl');
?>