<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->assign('myOptions', array(
    1800 => 'Joe Schmoe',
    9904 => 'Jack Smith',
    2003 => 'Charlie Brown')
    );
$smarty->assign('mySelect', 9904);

$smarty->display('template.tpl');

?>