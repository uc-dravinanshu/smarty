<?php
/* Smarty version 4.3.0, created on 2022-12-20 18:55:55
  from 'C:\xampp\htdocs\smarty\smarty_variable\smarty_now\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a1f72b7b0dc3_12430115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20ab947b9dc3924f2c4a439d6d3d7ce98595d6bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_variable\\smarty_now\\template.tpl',
      1 => 1671558925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1f72b7b0dc3_12430115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');
}
}
