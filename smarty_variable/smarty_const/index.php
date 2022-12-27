<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

// the constant defined in php
define('MY_CONST_VAL','CHERRIES');

//first is key scond is value.

$smarty->display('template.tpl');
?> 


