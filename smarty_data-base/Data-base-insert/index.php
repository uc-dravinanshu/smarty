<?php
 error_reporting(0);
require_once("../../libs/Smarty.class.php");

$smarty = new Smarty;

require("db_config.php");
if(isset($_POST['done'])){
    
    mysqli_query($conn,"INSERT INTO student(name, course, college) VALUES ('$_POST[name]','$_POST[course]', '$_POST[college]')");
    $smarty->assign('success',1);
}

$smarty->display('template.tpl');
?>