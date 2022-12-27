<?php
require_once('../../libs/Smarty.class.php');

//smarty object.
$smarty = new Smarty;

//assign a index array variable.
$smarty->assign('Contact',
    array(
        'Dravinanshu Mishra',
        '555-111-777',
        'Dravinanshu.Mishra@ucertify.com',
        array('8887173540','9651244924')
        )
);

$smarty->fetch('tempalte.tpl');



?>