<?php
require('../../libs/Smarty.class.php');


$smarty = new Smarty;

//assign a value.

$smarty->assign('someTitle', "this is the default BROWSER speed hello world expected\ntoday. hello i am a dravinanshu mishra.");

$smarty->assign('articleTitle', "Infertility unlikely to\nbe passed on, experts say.");

$smarty->assign('number', 555.77888);

$smarty->display('template.tpl');

?>