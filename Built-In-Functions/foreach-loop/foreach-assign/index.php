<?php
 require("../../../libs/Smarty.class.php");

 $smarty = new Smarty;

 $colors = array('red','green','blue');
 $smarty->assign('MyColor',$colors);

 $smarty->display('template.tpl');
?>