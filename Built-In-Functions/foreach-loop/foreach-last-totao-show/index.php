<?php
require('../../../libs/Smarty.class.php');

$smarty = new Smarty;

//associative array. @last, @total
for($i=1; $i<=10; $i++){
    $data_array[$i] = array(
        'id'=>101,
        'name'=>'Dravinanshu Mishra',
        'post'=>'Application Developer'
    );
}

//index array. @show.
for($j=1; $j<=10; $j++){
    $arr = array('amit','sumit','raj','ashu');
}


$smarty->assign('items', $data_array);
$smarty->assign('myArray', $arr);
$smarty->assign('itemas', $data_array);

$smarty->display('template.tpl');
$smarty->display('template-1.tpl');
$smarty->display('template-2.tpl');


?>