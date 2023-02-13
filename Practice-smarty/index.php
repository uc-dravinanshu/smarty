<?php
 require_once("../../smarty/libs/Smarty.class.php");

 $smarty = new Smarty;
 
 $da = array(10,20,30,40,50);
 $smarty->assign('data',$da);

 $str = 'This is a template {$smarty.server.SERVER_NAME|upper}{$smarty.server.SERVER_ADDR}';
 $smarty->assign('string',$str);

 $smarty->assign('check_box', array(
      'checked' => true,
      'value' => 'checked',
      'type' => 'checkbox',
      'default' => 'PHP'    
 ));

 $smarty->assign('opt',array(
      'india'=>'India',
      'usa'=>'USA',
      'uk'=>'UK',
      'russia'=>'Russian'
 ));
 $smarty->assign('choose_radio', array(
     'm'=>'Male',
     'f'=>'Female'
 ));

 $smarty->assign('ta_table', array(1,2,3,4,5,6,7));
 $smarty->assign('tr',array('bgcolor="red"','bgcolor="green"'));
 $smarty->assign('td',array('color="#fff"', 'bgcolor="yellow"'));


 $smarty->assign('radio_select','m');
 $smarty->assign('opt_select', 'usa');
 $smarty->assign('cust_id','default');
 $smarty->display("tmplate.tpl");
?>