<?php
/* Smarty version 4.3.0, created on 2022-12-24 11:05:10
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\foreach-loop\foreach-loop-last\template-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a6ced618c694_09508447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95a61aae6846a7c65b21a607c3ef95d5abf843d6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\foreach-loop\\foreach-loop-last\\template-1.tpl',
      1 => 1671876301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a6ced618c694_09508447 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myArray']->value, 'name', true);
$_smarty_tpl->tpl_vars['name']->show = ($_smarty_tpl->tpl_vars['name']->total > 0);
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
$__foreach_name_0_saved = $_smarty_tpl->tpl_vars['name'];
?>
    <li><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
<?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php if ($_smarty_tpl->tpl_vars['name']->show) {?> do something here if the array contained data <?php }
}
}
