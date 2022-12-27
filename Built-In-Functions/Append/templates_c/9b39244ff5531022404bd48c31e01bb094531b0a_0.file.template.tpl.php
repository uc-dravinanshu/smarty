<?php
/* Smarty version 4.3.0, created on 2022-12-21 16:48:06
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\Append\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a32ab622c4e1_77250294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b39244ff5531022404bd48c31e01bb094531b0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\Append\\template.tpl',
      1 => 1671637683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a32ab622c4e1_77250294 (Smarty_Internal_Template $_smarty_tpl) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['first'] = 'Bob';
$_smarty_tpl->_assignInScope('name', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['last'] = 'Meyer';
$_smarty_tpl->_assignInScope('name', $_tmp_array);?>


The first name is <?php echo $_smarty_tpl->tpl_vars['name']->value['first'];?>
.<br>
The last name is <?php echo $_smarty_tpl->tpl_vars['name']->value['last'];?>
.<?php }
}
