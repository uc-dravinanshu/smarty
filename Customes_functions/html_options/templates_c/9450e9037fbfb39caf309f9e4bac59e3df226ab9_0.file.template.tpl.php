<?php
/* Smarty version 4.3.0, created on 2022-12-26 10:13:45
  from 'C:\xampp\htdocs\smarty\Customes_functions\html_options\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a965c9147904_47771723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9450e9037fbfb39caf309f9e4bac59e3df226ab9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\html_options\\template.tpl',
      1 => 1672046021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a965c9147904_47771723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['myOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['mySelect']->value),$_smarty_tpl);
}
}
