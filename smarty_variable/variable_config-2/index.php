<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->assign('Name', 'Dravinanshu Mishra');

$smarty->display('template.tpl');

?>