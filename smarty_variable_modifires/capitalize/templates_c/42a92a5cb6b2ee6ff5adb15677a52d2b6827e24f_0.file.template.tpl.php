<?php
/* Smarty version 4.3.0, created on 2022-12-21 07:42:37
  from 'C:\xampp\htdocs\smarty\smarty_variable_modifires\vaiable_modifires\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a2aaddc94d80_93442831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42a92a5cb6b2ee6ff5adb15677a52d2b6827e24f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_variable_modifires\\vaiable_modifires\\template.tpl',
      1 => 1671604953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a2aaddc94d80_93442831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>
 <br/>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value);?>
 <br/>
<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articleTitle']->value,true);?>
 <br/><?php }
}
