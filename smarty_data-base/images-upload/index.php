<?php
require_once('../../libs/Smarty.class.php');

$smarty = new Smarty;

if(isset($_POST['upload'])){
    //echo "clicked";
    $img_loc=$_FILES['image']['tmp_name'];
    $img_name=$_FILES['image']['name'];
    $folder = "upload/$img_name";
     
  echo move_uploaded_file($_FILES["image"]["tmp_name"], $folder);

    
 
    $smarty->assign("success",1);
    $smarty->assign("fn",$img_name);
}

$smarty->display('index.tpl');

?>