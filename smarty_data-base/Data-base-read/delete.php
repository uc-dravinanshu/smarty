<?php
   require("db_config.php");
    $stu_id = $_REQUEST["id"];

    $sql = "DELETE FROM student WHERE id=$stu_id";

    if(mysqli_query($conn,$sql)){
         header("location:index.php");
    }else{
        echo "Data Not deleted";
    }
?>
