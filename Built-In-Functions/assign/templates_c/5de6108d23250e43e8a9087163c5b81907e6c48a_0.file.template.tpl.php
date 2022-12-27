<?php
/* Smarty version 4.3.0, created on 2022-12-22 06:15:25
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\assign\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a3e7ed6dbe86_09747117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5de6108d23250e43e8a9087163c5b81907e6c48a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\assign\\template.tpl',
      1 => 1671686118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a3e7ed6dbe86_09747117 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('name', "dravinanshu mishra" ,false ,8);?>

this is a <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<?php $_smarty_tpl->_assignInScope('running_total', 10);
$_smarty_tpl->_assignInScope('running_total', $_smarty_tpl->tpl_vars['running_total']->value+$_smarty_tpl->tpl_vars['some_array']->value['row']['some_value']);?>

<?php echo $_smarty_tpl->tpl_vars['running_total']->value;?>

<br/><br/>
<?php }
}
