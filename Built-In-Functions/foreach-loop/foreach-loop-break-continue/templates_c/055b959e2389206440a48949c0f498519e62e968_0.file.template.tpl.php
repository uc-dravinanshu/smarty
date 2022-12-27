<?php
/* Smarty version 4.3.0, created on 2022-12-24 11:32:32
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\foreach-loop\foreach-loop-break-continue\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a6d54087ec31_91062354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '055b959e2389206440a48949c0f498519e62e968' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\foreach-loop\\foreach-loop-break-continue\\template.tpl',
      1 => 1671877946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a6d54087ec31_91062354 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_assignInScope('data', array(1,2,3,4,5));?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['value']->value == 3) {?>
            <?php break 1;?>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <hr/><br/>
    <?php $_smarty_tpl->_assignInScope('datas', array(1,2,3,4,5));?>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['value']->value == 3) {?>
            <?php continue 1;?>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }
}
