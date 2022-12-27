<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

$str = 'The server name is {$smarty.server.SERVER_NAME|upper} '
       .'at {$smarty.server.SERVER_ADDR}';
$smarty->assign('foo',$str);

$smarty->display('template.tpl');
?>