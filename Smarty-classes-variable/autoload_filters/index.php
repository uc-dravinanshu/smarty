<?php
require_once('../../libs/Smarty.class.php');


//object.
$smarty = new Smarty;

$smarty->autoload_filters = array('pre' => array('trim', 'stamp'),
                                  'output' => array('convert'));


$smarty->display('template.tpl');

?>