<?php
/* Smarty version 4.3.0, created on 2022-12-26 07:36:45
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\while-loop\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a940fd8725c1_97865158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f91c71312e5996f8b5d5d60122da138b5e96a7d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\while-loop\\template.tpl',
      1 => 1672036602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a940fd8725c1_97865158 (Smarty_Internal_Template $_smarty_tpl) {
while ($_smarty_tpl->tpl_vars['foo']->value > 0) {?>
   <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>

<?php }?>



<?php echo $_smarty_tpl->tpl_vars['foo']->value;
}
}
