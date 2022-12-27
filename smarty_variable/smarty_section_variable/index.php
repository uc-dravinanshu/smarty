<?php
  require_once('../../libs/Smarty.class.php');

  $smarty = new Smarty;

//looping with a simple array with {section}
  //create an array.
  $data = array(101,102, 103,104, 105);
 
  //assign a $data in key data_id
  $smarty->assign('data_id', $data);

  //display and call the template.tpl file.
  $smarty->display('template.tpl');
?>