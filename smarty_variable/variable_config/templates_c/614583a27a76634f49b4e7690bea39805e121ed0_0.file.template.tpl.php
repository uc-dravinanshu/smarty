<?php
/* Smarty version 4.3.0, created on 2022-12-20 17:54:11
  from 'C:\xampp\htdocs\smarty\smarty_variable\variable_config\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a1e8b330a653_26706051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '614583a27a76634f49b4e7690bea39805e121ed0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_variable\\variable_config\\template.tpl',
      1 => 1671555247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1e8b330a653_26706051 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "foo.conf", null, 0);
?>



<html>
<title><?php echo (($tmp = $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle') ?? null)===null||$tmp==='' ? "No title" ?? null : $tmp);?>
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
