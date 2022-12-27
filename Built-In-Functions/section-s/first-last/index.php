<?php
require('../../../libs/Smarty.class.php');

$smarty = new Smarty;


//associative array. @total
for($i=1; $i<=10; $i++){
    $data_array[$i] = array(
        'id'=>101,
        'name'=>'Dravinanshu Mishra',
        'post'=>'Application Developer'
    );
}

$smarty->assign('items', $data_array);

$smarty->display('template.tpl');
?>