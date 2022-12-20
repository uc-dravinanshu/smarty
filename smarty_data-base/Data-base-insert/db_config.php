<?php
define('Host','localhost');
define('User','root');
define('Pass','');
define('DB','test');

$conn = mysqli_connect(Host, User, Pass, DB) or die("Data Base is not connnected");

if(!$conn){
    die("Not Connected");
}

?>