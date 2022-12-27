<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->assign('cust_ids', array(56,92,13,34,55));
$smarty->assign('cust_names', array(
                              'Joe Schmoe',
                              'Jane Johnson',
                              'Charlie Brown',
                              'Mack Jhon',
                              'Charly'
                            ));
$smarty->assign('customer_id', 92);

$smarty->display('template.tpl');

?>