<?php
  require_once("../../libs/Smarty.class.php");

  //object.
  $smarty = new Smarty;

 //assigned variable example.

  $smarty->assign('First_Name', 'Dravinanshu');
  $smarty->assign('Last_Name', 'Mishra');
  $smarty->assign('Meeting_Place', 'Prayagaraj');

  

//display it.

$smarty->display('template.tpl');

?>