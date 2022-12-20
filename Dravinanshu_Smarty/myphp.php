<?php
//first: include this file.
require('../libs/Smarty.class.php');

//second: create an object of Smarty.
$smarty = new Smarty;

//third: assign a value statically.
$smarty->assign('name', 'Dravinanshu Mishra');
$smarty->assign('address', 'Jhalwa, Prayagraj');
// $smarty->assign('date','jan-12-2023');


//fourth: display the .tpl file.
$smarty->display('template.tpl');

?>