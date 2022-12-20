<?php
 require_once('../../libs/Smarty.class.php');

 //object creation of Samrty
 $smarty = new Smarty;

 //loop with Array.
 for($i=1; $i<=10; $i++){
    $data_array[] = array(
        'no'=> $i,
        'name'=> 'Dravinanshu Mishra',
        'position'=> 'Application Programmer',
        'Address'=> 'Prayagraj',
        'Company'=>'Ucertify'
    );
 }

 //assign Samrty.
 $smarty->assign('data',$data_array);

 //it display.
 $smarty->display('template.tpl');
?>