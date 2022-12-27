<?php
 require("../../../libs/Smarty.class.php");

 $smarty = new Smarty;

//associative array variable.
$people = array('Name'=>'Dravinanshu Mishra','Email-id'=>'dravinanshu.mishra@ucertify.com');

//assign the $people array.
$smarty->assign('Myid',$people);

 $smarty->display('template.tpl');
?>