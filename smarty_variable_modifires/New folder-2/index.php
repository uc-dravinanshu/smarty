<?php
require_once('../../libs/Smarty.class.php');

//object.
$smarty = new Smarty;

//assign.
$smarty->assign('articleTitle', "Grandmother of\neight makes\t    hole in one.");


$smarty->assign('article',
                "Blind Woman Gets <font face=\"helvetica\">New
Kidney</font> from Dad she Hasn't Seen in <b>years</b>."
               );

$smarty->assign('articles',
"Blind woman gets new kidney from dad she hasn't seen in years."
);               

$smarty->display('template.tpl');

?>