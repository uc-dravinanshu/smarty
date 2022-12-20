<?php
require("../libs/Smarty.class.php");

$smarty = new Smarty;
// $smarty->assign('Contacts',
//     array(
//           'fax' => '555-222-9876',
//           'email' => 'Dravinanshu.Mishra@gmail.com',
//           'phone' => array('home' => '555-444-3333',
//                            'cell' => '555-1111-1234')
//                            )
//          );


// assecing by index number.

$smarty->assign('Contacts',
        array(
            '555-222-9876',
            'zaphod@slartibartfast.example.com',
            array('555-444-3333','555-111-1234')
                )
            );



$smarty->display('template.tpl');
?>