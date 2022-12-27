<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

//associative array.

for($i=1; $i<=10; $i++) {
    $data_array[$i] = array(
        'name'=>'Dravinanshu Mishra',
        'address'=>'Prayagraj'
    );
}

$smarty->assign('foo',$data_array);
$smarty->display('template.tpl');
?>