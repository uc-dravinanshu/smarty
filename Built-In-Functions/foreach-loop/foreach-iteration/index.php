<?php
require("../../../libs/Smarty.class.php");

$smarty = new Smarty;

//associative array.
for($i=1; $i<=10; $i++) {
    $data_array[] = array(
        'name'=>'Dravinanshu Mishra',
        'post'=>'Application Developer',
        'company'=>'uCertify',
        'location'=>'Prayagaraj'
    );
}

// for($i=1; $i<=10; $i++){

// $data_array[$i] = array(
//     'name'=>'Ashu',
//     'location'=>'Prayagraj'
// );
// }
//asssing the $data_array asssociative array.
$smarty->assign('myNames', $data_array);

$smarty->display('template.tpl');
?>