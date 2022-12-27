<?php
/* Smarty version 4.3.0, created on 2022-12-26 10:56:26
  from 'C:\xampp\htdocs\smarty\Customes_functions\html_radio\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a96fca16b589_51819569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c372116045979fef582a7da9be53387eaeacf1ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\html_radio\\template.tpl',
      1 => 1672048558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a96fca16b589_51819569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),));
echo smarty_function_html_radios(array('name'=>'id','values'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value,'separator'=>'<br />'),$_smarty_tpl);
}
}
