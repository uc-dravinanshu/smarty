<?php
require_once('../../libs/Smarty.class.php');

$smarty = new Smarty;

// variavle
// {*This is a variable declaration of Smarty PHP*}

$var = "Hello World"; 

$smarty->assign('var', $var);
$smarty->assign('firstname', 'Dravinanshu');
$smarty->assign('lastname', 'Mishra');
$smarty->assign('meetingPlace', 'Prayagraj');


$smarty->display('template.tpl');

?>