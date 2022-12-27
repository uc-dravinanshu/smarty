<?php
/* Smarty version 4.3.0, created on 2022-12-25 16:24:28
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\nocache\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a86b2c9727d1_46471655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51b86036364651c89f9cc1b84037ae6d9394d7c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\nocache\\template.tpl',
      1 => 1671981864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a86b2c9727d1_46471655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

Today's date is

<?php echo smarty_modifier_date_format(time());?>

<?php }
}
