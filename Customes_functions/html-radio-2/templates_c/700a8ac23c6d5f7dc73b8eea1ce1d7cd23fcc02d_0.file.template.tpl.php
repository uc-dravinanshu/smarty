<?php
/* Smarty version 4.3.0, created on 2022-12-26 11:04:16
  from 'C:\xampp\htdocs\smarty\Customes_functions\html-radio-2\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a971a04121a5_18361611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '700a8ac23c6d5f7dc73b8eea1ce1d7cd23fcc02d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\html-radio-2\\template.tpl',
      1 => 1672049048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a971a04121a5_18361611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),));
echo smarty_function_html_radios(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['cust_radios']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);
}
}
