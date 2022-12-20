<?php
/* Smarty version 4.3.0, created on 2022-12-19 09:53:16
  from 'C:\xampp\htdocs\smarty\Dravinanshu_Smarty\hello_world\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0267c358120_75090959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b63de4a22f4c4ea96e4d3f2549a607591c1b4bf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Dravinanshu_Smarty\\hello_world\\template.tpl',
      1 => 1671439993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0267c358120_75090959 (Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Hello <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
, glad to see you can make it.
<br />
This weeks meeting is in <?php echo $_smarty_tpl->tpl_vars['meetingplace']->value;?>
.
This weeks meeting is in <?php echo $_smarty_tpl->tpl_vars['meetingPlace']->value;?>
. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['var']->value;?>
</h1>
   <h5>
    <table border='1' cellpadding='0' cellspacing='0' bgcolor='silver'>
        <tr>
           <th>First Name &nbsp; Last name &nbsp; MeetingPlace</th>
        </tr>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['meetingPlace']->value;?>
</td>
        </tr>
    </table>
   </h5>
</body>
</html><?php }
}
