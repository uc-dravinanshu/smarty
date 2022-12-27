<?php
require_once('../../libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->assign('cust_ids', array(1000,1001,1002,1003));
$smarty->assign('cust_names', array(
                              'Dravinanshu Mishra',
                              'Jack Thompason',
                              'Jhony levar',
                              'Charlie chaplin')
                              );
$smarty->assign('customer_id', 1001);

$smarty->display('template.tpl');
?>