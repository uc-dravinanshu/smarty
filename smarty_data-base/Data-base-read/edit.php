<?php
require_once('../../libs/Smarty.class.php');


$smarty = new Smarty;
require('db_config.php');

if(!empty($_GET['id'])){
    echo "<h1>welcome to the edit section </h1>";
    //echo $_GET['id']." = id is found here";
    $sql = mysqli_query($conn, "SELECT * FROM `student` WHERE `id`=$_GET[id]");
    $data = mysqli_fetch_assoc($sql);
    $dataresult = array(
        'id'=>$data['id'],
        'name'=>$data['name'],
        'course'=>$data['course'],
        'college'=>$data['college']
        );
    $smarty->assign('data', $dataresult);
   
    if(isset($_POST['edit'])){
        $sql = mysqli_query($conn, "UPDATE `student` SET `name`='$_POST[name]', `course`='$_POST[course]', `college`='$_POST[college]' WHERE `id`='$_POST[id]'");
        header('location: index.php');
    }
}  

$smarty->display('edit.tpl');

?>