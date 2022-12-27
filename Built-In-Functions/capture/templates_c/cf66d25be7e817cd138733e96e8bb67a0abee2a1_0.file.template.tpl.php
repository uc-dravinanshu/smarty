<?php
/* Smarty version 4.3.0, created on 2022-12-22 09:41:14
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\capture\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a4182a7d4946_29787163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf66d25be7e817cd138733e96e8bb67a0abee2a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\capture\\template.tpl',
      1 => 1671698471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4182a7d4946_29787163 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "foo");?>hello<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
I say just 
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', null, "foo");?>world<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value, 'text');
$_smarty_tpl->tpl_vars['text']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->do_else = false;
echo $_smarty_tpl->tpl_vars['text']->value;?>
 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> -->
<?php $_smarty_tpl->_assignInScope('my_server_name', "uCertify");?> 
<?php $_smarty_tpl->_assignInScope('my_server_addr', "120,Prayagraj");
$_smarty_tpl->_assignInScope('my_ip', 12467);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'some_content', 'popText', null);?>
The server is <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['my_server_name']->value ?? '', 'UTF-8');?>
 at <br/> <?php echo $_smarty_tpl->tpl_vars['my_server_addr']->value;?>
<br>
Your ip is <?php echo $_smarty_tpl->tpl_vars['my_ip']->value;?>
.
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

 

<a href="#"><?php echo $_smarty_tpl->tpl_vars['popText']->value;?>
</a><?php }
}
