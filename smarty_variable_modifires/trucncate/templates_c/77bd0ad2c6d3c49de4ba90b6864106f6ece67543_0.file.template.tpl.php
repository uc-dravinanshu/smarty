<?php
/* Smarty version 4.3.0, created on 2022-12-21 11:31:28
  from 'C:\xampp\htdocs\smarty\smarty_variable_modifires\trucncate\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a2e080bfb2b4_25822094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77bd0ad2c6d3c49de4ba90b6864106f6ece67543' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_variable_modifires\\trucncate\\template.tpl',
      1 => 1671618683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a2e080bfb2b4_25822094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

<?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>
 <br>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value);?>
 <br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,4);?>
 <br/> 
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,'');?>
 <br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,"---");?>
 <br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,'',true);?>
 <br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,"...",true);?>
 <br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['articleTitle']->value,30,'..',true,true);?>
 <br/>

<?php }
}
