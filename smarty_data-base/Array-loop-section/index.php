<?php
require_once('../../libs/Smarty.class.php');

//create an object.
$smarty = new Smarty;

//create an for loop array and mixed with array.

for($i=1; $i<=1; $i++){
  $wo[] =  array('Working'=>'php');
}

for($i=1; $i<=7; $i++){
    $data_array[] = array(
        'No'=>$i,
        'Name'=>'Dravinanshu Mishra',
        'Post'=>'Application Developer',
        'Working'=>$wo,
        'Company'=>'Ucertify'
    );
}
//assign a value.
$smarty->assign('data', $data_array);


//display it.
$smarty->display('index.tpl');

?>