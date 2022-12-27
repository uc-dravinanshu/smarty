<?php
/* Smarty version 4.3.0, created on 2022-12-23 08:19:26
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\foreach-loop\foreach-iteration\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a5567eb48361_45649206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e2dcfff65a3c5e64400708ff963939e5a38cdfb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\foreach-loop\\foreach-iteration\\template.tpl',
      1 => 1671779963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a5567eb48361_45649206 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myNames']->value, 'n', false, 'key');
$_smarty_tpl->tpl_vars['n']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->do_else = false;
?>
   <?php if (!(1 & $_smarty_tpl->tpl_vars['key']->value / 3)) {?>
     <span style="color: red"><?php echo $_smarty_tpl->tpl_vars['n']->value['name'];?>
</span><br/>
   <?php } else { ?>
     <span style="color: green"><?php echo $_smarty_tpl->tpl_vars['n']->value['location'];?>
</span> <br/>
   <?php }?>

   <!-- <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 -->
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php }
}
