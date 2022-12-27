<?php
/* Smarty version 4.3.0, created on 2022-12-22 17:00:04
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\foreach-loop\multidimensional-array-foreach\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a47f04206e12_33584593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd312f2390b8b9b490a0f64fdb2cb3735592b660' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\foreach-loop\\multidimensional-array-foreach\\template.tpl',
      1 => 1671724798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a47f04206e12_33584593 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Mydata']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
      <li><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul><?php }
}
