<?php
require("../../../libs/Smarty.class.php");

$smarty = new Smarty;

for($i=1; $i<=10; $i++){
    $data_array[$i] = array(
        'no'=> $i,
        'name'=> 'Dravinanshu Mishra',
        'position'=> 'Application Programmer',
        'Address'=> 'Prayagraj',
        'Company'=>'Ucertify'
    );
 }

$smarty->assign('items', $data_array);

$smarty->display('tempalte.tpl');
?>