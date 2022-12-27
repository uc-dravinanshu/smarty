<?php
/* Smarty version 4.3.0, created on 2022-12-22 16:58:55
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\foreach-loop\associative-array\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a47ebf0ab1f4_51801023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3463175dc827898cdc24a9706611114117761388' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\foreach-loop\\associative-array\\template.tpl',
      1 => 1671724704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a47ebf0ab1f4_51801023 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Myid']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
$_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
$__foreach_value_0_saved = $_smarty_tpl->tpl_vars['value'];
?>
      <li><?php echo $_smarty_tpl->tpl_vars['value']->key;?>
 : <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
    <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
