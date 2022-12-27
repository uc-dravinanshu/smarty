<?php
require_once('../../libs/Smarty.class.php');

//smarty object.

$smarty = new Smarty;

$smarty->assign('articleTitle', 'Hello, This is Dravinanshu Mishra from Prayagraj.');

$smarty->display('template.tpl');

?>