<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

$arr['Sport'] = array(6 => 'Golf', 9 => 'Cricket',7 => 'Swim');
$arr['Rest']  = array(3 => 'Sauna',1 => 'Massage');
$smarty->assign('lookups', $arr);
$smarty->assign('fav', 7);


$smarty->display('template.tpl');

?>