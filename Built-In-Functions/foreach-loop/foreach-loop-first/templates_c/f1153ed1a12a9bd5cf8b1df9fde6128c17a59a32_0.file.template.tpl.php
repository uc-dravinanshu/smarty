<?php
/* Smarty version 4.3.0, created on 2022-12-23 13:03:58
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\foreach-loop\foreach-loop-first\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a5992eac4614_23805579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1153ed1a12a9bd5cf8b1df9fde6128c17a59a32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\foreach-loop\\foreach-loop-first\\template.tpl',
      1 => 1671797035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a5992eac4614_23805579 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
  </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
