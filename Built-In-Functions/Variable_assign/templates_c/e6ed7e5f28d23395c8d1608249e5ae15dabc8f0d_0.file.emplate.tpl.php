<?php
/* Smarty version 4.3.0, created on 2022-12-22 05:57:39
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\Variable_assign\emplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a3e3c36db497_86248767',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6ed7e5f28d23395c8d1608249e5ae15dabc8f0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\Variable_assign\\emplate.tpl',
      1 => 1671685056,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a3e3c36db497_86248767 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('name', 'Dravinanshu Mishra');?>

this is a <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<?php $_smarty_tpl->_assignInScope('running_total', 1);?>

<?php $_smarty_tpl->_assignInScope('running_total', $_smarty_tpl->tpl_vars['running_total']->value+$_smarty_tpl->tpl_vars['some_array']->value['row']['some_value']);?>

<?php echo $_smarty_tpl->tpl_vars['running_total']->value;?>


<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['row'] = "Ashu";
$_smarty_tpl->_assignInScope('user', $_tmp_array);
echo $_smarty_tpl->tpl_vars['user']->value['row'];
}
}
