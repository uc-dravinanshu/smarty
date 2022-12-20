<?php
require_once('../../libs/Smarty.class.php');

$smarty = new Smarty;

$a = 20;
$b = 10;

$sum = $a +$b;
$sub = $a - $b;
$mul = $a * $b;
$div = $a / $b;
$mod = $a % $b;


$smarty->assign('sum', $sum);
$smarty->assign('sub', $sub);
$smarty->assign('mul', $mul);
$smarty->assign('div', $div);
$smarty->assign('mod', $mod);


$smarty->display('index.tpl');

?>