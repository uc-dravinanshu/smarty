<?php
  require_once("../../libs/Smarty.class.php");

  //smarty obeject create.
  $smarty = new Smarty;

 //assign the variable in associative array ways.

 $smarty->assign('Contact_Info',
        array(
            'Name'=>'Dravinanshu Mishra',
            'Email_id'=>'Dravinanshu98@gmail.com',
            'Fax_no'=>'555-111-222',
            'Mobile_no'=> array('Home'=>'9651244924','Office'=>'8887173540')
        )  
 );


  //display.
  $smarty->display('template.tpl');

?>