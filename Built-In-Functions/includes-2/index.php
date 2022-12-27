<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

//array.
$link_array = array(
    'name'=>'dravinanshu Mishra',
    'location'=>'Prayagaraj'
);

$smarty->assign('link_array',$link_array);

$smarty->display('template.tpl');

?>