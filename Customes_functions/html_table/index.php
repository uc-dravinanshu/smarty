<?php
require_once('../../libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->assign( 'data', array(1,2,3,4,5,6,7,8,9) );
$smarty->assign( 'tr', array('bgcolor="#eeeeee"','bgcolor="#dddddd"') );

$smarty->display('template.tpl');
?>