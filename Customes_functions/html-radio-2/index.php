<?php
require_once('../../libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->assign('cust_radios', array(
    1000 => 'Joe Schmoe',
    1001 => 'Jack Smith',
    1002 => 'Jane Johnson',
    1003 => 'Charlie Brown'));
$smarty->assign('customer_id', 1001);

$smarty->display('template.tpl');
?>