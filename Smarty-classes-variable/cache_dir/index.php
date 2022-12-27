<?php
require('../../libs/Smarty.class.php');

$smarty = new Smarty;

// get directory where compiled templates are stored
$cacheDir = $smarty->getCacheDir();

// set directory where rendered template's output is stored
$smarty->setCacheDir('./cache');

// chaining of method calls
$smarty->setTemplateDir('./templates')
       ->setCompileDir('./templates_c')
       ->setCacheDir('./cache');


$smarty->display('template.tpl');
?>