<?php
/* Smarty version 4.3.0, created on 2022-12-26 10:44:15
  from 'C:\xampp\htdocs\smarty\Customes_functions\html-options-3\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a96cef6d82c7_82315507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a65adab9b23b0ccd12e1d1b78bb855fc0c53b4c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\html-options-3\\template.tpl',
      1 => 1672047848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a96cef6d82c7_82315507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['lookups']->value,'selected'=>$_smarty_tpl->tpl_vars['fav']->value),$_smarty_tpl);
}
}
