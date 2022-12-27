<?php
/* Smarty version 4.3.0, created on 2022-12-23 06:44:38
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\foreach-loop\foreach-index\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a540468a6f41_73030694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eac9d6b47f3c0c082e8ef803db1db4bb97e6503d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\foreach-loop\\foreach-index\\template.tpl',
      1 => 1671774275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a540468a6f41_73030694 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['i']->index++;
$__foreach_i_0_saved = $_smarty_tpl->tpl_vars['i'];
?>
  <?php if ($_smarty_tpl->tpl_vars['i']->index == 3) {?>
          <tr><td><?php echo $_smarty_tpl->tpl_vars['i']->index;?>
 &nbsp;</td></tr>
  <?php }?>
  <tr><td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td></tr>
<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table
<?php }
}
