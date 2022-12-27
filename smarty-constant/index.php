<?php
// // set path to Smarty directory *nix style
// define('SMARTY_DIR', '/usr/local/lib/php/Smarty-v.e.r/libs/');

// path to Smarty windows style
define('SMARTY_DIR', 'C:/xampp/htdocs/smarty/libs/');

// include the smarty class, note 'S' is upper case
require_once(SMARTY_DIR . 'Smarty.class.php');

$smarty = new Smarty;

$smarty->display('template.tpl');

?>

