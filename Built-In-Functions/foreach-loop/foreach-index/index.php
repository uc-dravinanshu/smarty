<?php
require("../../../libs/Smarty.class.php");

$smarty = new Smarty;

//associative array.
// $numbers = array('label'=>1,2,3,4,5,6,7);
for($i=1; $i<=10; $i++){
    $data_array[] = array(
        'no'=> $i,
        'name'=> 'Dravinanshu Mishra',
        'position'=> 'Application Programmer',
        'Address'=> 'Prayagraj',
        'Company'=>'Ucertify'
    );
 }

$smarty->assign('items',$data_array);

$smarty->display('template.tpl');
?>