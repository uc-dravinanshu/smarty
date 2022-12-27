<?php
/* Smarty version 4.3.0, created on 2022-12-21 12:20:57
  from 'C:\xampp\htdocs\smarty\combining_modifires\combining_modifires-1\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a2ec19553702_58793341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a16c783ae23caebda6023de4f1cf4423777dc85' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\combining_modifires\\combining_modifires-1\\template.tpl',
      1 => 1671621652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a2ec19553702_58793341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

<?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>
 <br/>
<?php echo smarty_modifier_spacify(mb_strtoupper($_smarty_tpl->tpl_vars['articleTitle']->value ?? '', 'UTF-8'));?>
 <br/>
<?php echo smarty_modifier_truncate(smarty_modifier_spacify(mb_strtolower($_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8')));?>
 <br/>
<?php echo smarty_modifier_spacify(smarty_modifier_truncate(mb_strtolower($_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8'),30));?>
 <br/>
<?php echo smarty_modifier_truncate(smarty_modifier_spacify(mb_strtolower($_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8')),30,". . .");?>
 <br/><?php }
}
