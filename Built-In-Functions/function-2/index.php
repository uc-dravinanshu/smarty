<?php
require("../../libs/Smarty.class.php");

$smarty = new Smarty;

//multidimensional array.
$arr =array(
        'item1','item-2','item3'=>array('item-3-1','item-3-2','item-3-3'=>array(
            'item-3-3-1','item-3-3-2','item-3-3-3'
        ),'item-4')
    );

$smarty->assign('data_array', $arr);


$smarty->display('template.tpl');
?>