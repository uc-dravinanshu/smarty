<?php
/* Smarty version 4.3.0, created on 2022-12-20 16:35:13
  from 'C:\xampp\htdocs\smarty\smarty_variable\associative_array_variable\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a1d631c956c4_96951655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5f2b86ec2e9c469984f3f7a4a505311e1d62868' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_variable\\associative_array_variable\\template.tpl',
      1 => 1671550509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1d631c956c4_96951655 (Smarty_Internal_Template $_smarty_tpl) {
?>Name: <?php echo $_smarty_tpl->tpl_vars['Contact_Info']->value['Name'];?>
 <br/>
Email_id: <?php echo $_smarty_tpl->tpl_vars['Contact_Info']->value['Email_id'];?>
 <br/>
fax_no: <?php echo $_smarty_tpl->tpl_vars['Contact_Info']->value['Fax_no'];?>
 <br/>
Home Contact No: <?php echo $_smarty_tpl->tpl_vars['Contact_Info']->value['Mobile_no']['Home'];?>
 <br/>
Office Contact No: <?php echo $_smarty_tpl->tpl_vars['Contact_Info']->value['Mobile_no']['Office'];
}
}
