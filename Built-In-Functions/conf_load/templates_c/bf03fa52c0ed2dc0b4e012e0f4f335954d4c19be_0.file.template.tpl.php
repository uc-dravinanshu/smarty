<?php
/* Smarty version 4.3.0, created on 2022-12-22 10:37:06
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\conf_load\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a42542476aa3_96503415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf03fa52c0ed2dc0b4e012e0f4f335954d4c19be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\conf_load\\template.tpl',
      1 => 1671700798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a42542476aa3_96503415 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'example.conf', 'Customer', 0);
?>


<html>
<title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</title>
<body bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bodyBgColor');?>
">
<table border="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBorderSize');?>
" bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'tableBgColor');?>
">
   <tr bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'rowBgColor');?>
">
      <td>First</td>
      <td>Last</td>
      <td>Address</td>
   </tr>
</table>
</body>
</html><?php }
}
