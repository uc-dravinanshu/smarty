<?php
/* Smarty version 4.3.0, created on 2022-12-22 13:13:20
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\for\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a449e045a9e8_07563090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '986fdb273d8a3f525ebfebc46f8b8a7eee6f9780' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\for\\template.tpl',
      1 => 1671711197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a449e045a9e8_07563090 (Smarty_Internal_Template $_smarty_tpl) {
?><ul>
<?php
$_smarty_tpl->tpl_vars['number'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['number']->step = 1;$_smarty_tpl->tpl_vars['number']->total = (int) ceil(($_smarty_tpl->tpl_vars['number']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['number']->step));
if ($_smarty_tpl->tpl_vars['number']->total > 0) {
for ($_smarty_tpl->tpl_vars['number']->value = 1, $_smarty_tpl->tpl_vars['number']->iteration = 1;$_smarty_tpl->tpl_vars['number']->iteration <= $_smarty_tpl->tpl_vars['number']->total;$_smarty_tpl->tpl_vars['number']->value += $_smarty_tpl->tpl_vars['number']->step, $_smarty_tpl->tpl_vars['number']->iteration++) {
$_smarty_tpl->tpl_vars['number']->first = $_smarty_tpl->tpl_vars['number']->iteration === 1;$_smarty_tpl->tpl_vars['number']->last = $_smarty_tpl->tpl_vars['number']->iteration === $_smarty_tpl->tpl_vars['number']->total;?>
    <li><?php echo $_smarty_tpl->tpl_vars['number']->value;?>
</li>
<?php }
}
?>
</ul><?php }
}
