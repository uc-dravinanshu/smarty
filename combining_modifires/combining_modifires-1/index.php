<?php
require('../../libs/Smarty.class.php');

//object creation.
$smarty = new Smarty;

$smarty->assign('articleTitle', 'Smokers are Productive, but Death Cuts Efficiency.');

$smarty->display('template.tpl');
?>