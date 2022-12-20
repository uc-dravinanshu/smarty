<?php
require_once('../../libs/Smarty.class.php');

$smarty = new Smarty;

$a = 10;

if($a == 10){
    $work = "PHP";
}else{
    $work = "JS";
}

$smarty->assign('work', $work);
$smarty->display('index.tpl');
?>