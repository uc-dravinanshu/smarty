<?php
/* Smarty version 4.3.0, created on 2022-12-21 11:25:35
  from 'C:\xampp\htdocs\smarty\smarty_variable_modifires\capitalize\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a2df1f2c16f1_59352541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1a7931d980756666a4959a99fdf4a406e5029f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_variable_modifires\\capitalize\\template.tpl',
      1 => 1671604953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a2df1f2c16f1_59352541 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>
 <br/>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value);?>
 <br/>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value,true);?>
 <br/><?php }
}
