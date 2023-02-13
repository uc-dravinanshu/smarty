<?php
require_once("../libs/Smarty.class.php");

$smarty = new Smarty;

$smarty->assign('sometext', 'this is a smarty php examples,hello word.');

$config['date'] = '%I:%M %p';
$config['time'] = '%H:%M:%S';
$smarty->assign('config', $config);

$smarty->assign('title','');
$smarty->assign('articale','<h1>This is the way of the talking</h1>');
$smarty->display('template.tpl');
?>