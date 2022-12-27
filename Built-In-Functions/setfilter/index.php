<?php
 require('../../libs/Smarty.class.php');

 $smarty = new Smarty;

 $foos = array(1,2,3,4,5,6,7);
 
 $smarty->assign('foo','$foos');
 $smarty->display('template.tpl');
?>