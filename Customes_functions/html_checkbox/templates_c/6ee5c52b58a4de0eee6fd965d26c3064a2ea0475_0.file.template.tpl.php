<?php
/* Smarty version 4.3.0, created on 2022-12-26 09:45:28
  from 'C:\xampp\htdocs\smarty\Customes_functions\html_checkbox\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a95f28bba3d0_09682345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ee5c52b58a4de0eee6fd965d26c3064a2ea0475' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\html_checkbox\\template.tpl',
      1 => 1672044322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a95f28bba3d0_09682345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),));
echo smarty_function_html_checkboxes(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);
}
}
