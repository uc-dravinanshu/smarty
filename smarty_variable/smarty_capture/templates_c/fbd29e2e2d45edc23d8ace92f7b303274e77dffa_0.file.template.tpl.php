<?php
/* Smarty version 4.3.0, created on 2022-12-21 05:57:38
  from 'C:\xampp\htdocs\smarty\smarty_variable\smarty_capture\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a292428ab031_78525194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbd29e2e2d45edc23d8ace92f7b303274e77dffa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_variable\\smarty_capture\\template.tpl',
      1 => 1671598654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a292428ab031_78525194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "foo");?>
  hello
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

I say just 

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "foo");?>
   world
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value, 'text');
$_smarty_tpl->tpl_vars['text']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->do_else = false;
?>
   <?php echo $_smarty_tpl->tpl_vars['text']->value;?>
 
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
