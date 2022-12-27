<?php
require('../../../libs/Smarty.class.php');

$smarty = new Smarty;

$data = array(
          array('name' => 'John Smith', 'home' => '555-555-5555',
                'cell' => '666-555-5555', 'email' => 'john@myexample.com'),
          array('name' => 'Jack Jones', 'home' => '777-555-5555',
                'cell' => '888-555-5555', 'email' => 'jack@myexample.com'),
          array('name' => 'Jane Munson', 'home' => '000-555-5555',
                'cell' => '123456', 'email' => 'jane@myexample.com')
        );
$smarty->assign('contacts',$data);

$smarty->display('template.tpl');
?>
