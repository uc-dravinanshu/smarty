<?php
/* Smarty version 4.3.0, created on 2022-12-18 17:03:44
  from 'C:\xampp\htdocs\smarty\Dravinanshu_Smarty\function\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639f39e06967b4_23455845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd50044d032c22e8901f3316e07144d7ea61c1b50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Dravinanshu_Smarty\\function\\template.tpl',
      1 => 1671379421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639f39e06967b4_23455845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select name=user>
        <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'output'=>$_smarty_tpl->tpl_vars['names']->value,'selected'=>"5"),$_smarty_tpl);?>

    </select>

</body>
</html><?php }
}
