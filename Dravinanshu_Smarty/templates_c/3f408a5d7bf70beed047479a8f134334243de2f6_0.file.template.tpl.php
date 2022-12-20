<?php
/* Smarty version 4.3.0, created on 2022-12-19 11:22:27
  from 'C:\xampp\htdocs\smarty\Dravinanshu_Smarty\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a03b63da4bf8_27717910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f408a5d7bf70beed047479a8f134334243de2f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Dravinanshu_Smarty\\template.tpl',
      1 => 1671408455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a03b63da4bf8_27717910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tpl file</title>
</head>
<body>
    <!-- //this file runs bassed on myphp.php file. -->
    <pre>
    <h1 tabindex="0">user Information</h1>
    Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

    address: <?php echo $_smarty_tpl->tpl_vars['address']->value;?>


    <!-- //commnets way in smarty php -->
    
       <!--this is become commnets in smarty way -->
      
    <!-- Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>
 -->
    
        </pre>
</body>
</html><?php }
}
