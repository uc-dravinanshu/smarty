<?php
require_once('../../libs/Smarty.class.php');

require('db_config.php');
//smarty object.
$smarty = new Smarty;

$no = 1;
$sql = mysqli_query($conn, "SELECT * FROM `student`");

while($data=mysqli_fetch_assoc($sql)){
    $dataresult[] = array(
        'no'=>$no,
        'name'=>$data['name'],
        'course'=>$data['course'],
        'college'=>$data['college'],
        'id'=>$data['id']
    );
    $no++;
}

$smarty->assign('data', $dataresult);

$smarty->display('index.tpl');

?>