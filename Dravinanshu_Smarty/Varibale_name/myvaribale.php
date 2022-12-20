<?php
// first: include the smarty class.
require_once("../../libs/Smarty.class.php");

//second create an object of smarty php.
$smarty = new Smarty;


//third: assign the value of $smarty objcet.

// here i'm going to try string, array, (index arrya, associative arrya, multidimensional array)

$smarty->assign('str','This is a simple string of smarty Php');   

//indexed array.
$smarty->assign('names', array('Amit','Sumit',30,'Dravinanshu'));

// associative array
$smarty->assign('us', array('Name'=>'Dravinanshu Mishra', 'Address'=>'Prayagraj'));


//multidimensional array
$smarty->assign('datas', array(
    array('name'=>'Ashu Mishra', 'post'=>'Application Developer'),
    array('name'=>'Megha mam', 'post'=>'Director of Quality Analyst'),
    array('name'=>'Vikash sir', 'post'=>'Sr. Quality Analyst')
));



//fourth: diplay the mytemplate.tpl file.
$smarty->display('mytemplate.tpl');

?>