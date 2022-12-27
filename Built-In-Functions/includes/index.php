<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

$title="Home page";

$smarty->assign('title', $title);

$smarty->display('template.tpl');

?>