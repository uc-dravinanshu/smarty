<?php
require("../../libs/Smarty.class.php");

$smarty = new Smarty;

$smarty->assign('articleTitle', 'dravinanshu mishra');

$smarty->display('template.tpl');
?>