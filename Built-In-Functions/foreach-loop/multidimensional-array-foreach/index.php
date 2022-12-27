<?php
 require("../../../libs/Smarty.class.php");

 $smarty = new Smarty;

//multidimensional array -variable.
 $BioData = array(
    array('Name'=>'Dravinanshu Mishra','Email-id'=>'dravinanshu.mishra@ucertify.com'),
    array('Name'=>'Ashu Mishra','Email-id'=>'Ashu.mishra@ucertify.com')
 );


//assign the $people array.
$smarty->assign('Mydata',$BioData);

 $smarty->display('template.tpl');
?>