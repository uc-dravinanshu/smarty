<?php
/* Smarty version 4.3.0, created on 2022-12-24 11:14:44
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\foreach-loop\foreach-loop-last\template-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a6d114e5d562_54464571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d2d067deda0bde0cb0eeb90b0a4e041ab492273' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\foreach-loop\\foreach-loop-last\\template-2.tpl',
      1 => 1671876822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a6d114e5d562_54464571 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['itemas']->value, 'item', true);
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
$__foreach_item_0_saved = $_smarty_tpl->tpl_vars['item'];
?>
  <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<hr/>
  <?php if ($_smarty_tpl->tpl_vars['item']->last) {?>
    <div id="total"><?php echo $_smarty_tpl->tpl_vars['item']->total;?>
 items</div>
  <?php }
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
