<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

//
$smarty->assign('cust_ids', array(1000,1001,1002,1003));

$smarty->assign('cust_names', array(
                                'Vaibha Trpathi',
                                'Vaibha kesarwani',
                                'Vaibhav agrawal',
                                'Vaibha Brown')
                              );
$smarty->assign('customer_id', 1001);


$smarty->display('template.tpl');
?>