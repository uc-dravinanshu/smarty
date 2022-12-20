<?php
/* Smarty version 4.3.0, created on 2022-12-20 12:23:34
  from 'C:\xampp\htdocs\smarty\variable\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a19b36df05d7_68903063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0174a18cf33260c5c53dd0de8b3b44709e70e8c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\variable\\template.tpl',
      1 => 1671535409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a19b36df05d7_68903063 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- <?php echo $_smarty_tpl->tpl_vars['Contacts']->value['fax'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['email'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['home'];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value['phone']['cell'];?>
<br /> -->


<!-- //  accessing by indexed number-->
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[0];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[1];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[2][0];?>
<br />
<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[2][1];?>
<br /><?php }
}
