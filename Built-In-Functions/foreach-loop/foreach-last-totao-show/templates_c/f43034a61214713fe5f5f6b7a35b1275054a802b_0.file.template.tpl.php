<?php
/* Smarty version 4.3.0, created on 2022-12-24 11:01:07
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\foreach-loop\foreach-loop-last\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a6cde3f2f9e1_99287395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f43034a61214713fe5f5f6b7a35b1275054a802b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\foreach-loop\\foreach-loop-last\\template.tpl',
      1 => 1671876064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a6cde3f2f9e1_99287395 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', true);
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
?>
  <a href="#<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br/>
  <?php if ($_smarty_tpl->tpl_vars['item']->last) {?><hr><?php } else { ?>,<?php }
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved;
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?>
  ... no items to loop ...
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
