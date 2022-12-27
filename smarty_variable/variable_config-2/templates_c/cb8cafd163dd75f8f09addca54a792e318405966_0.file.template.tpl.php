<?php
/* Smarty version 4.3.0, created on 2022-12-20 18:03:34
  from 'C:\xampp\htdocs\smarty\smarty_variable\variable_config-2\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a1eae69ac616_85611463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb8cafd163dd75f8f09addca54a792e318405966' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_variable\\variable_config-2\\template.tpl',
      1 => 1671555811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1eae69ac616_85611463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'global.conf', null, 0);
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
    <td>First:<?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</td>
    <td>Last</td>
    <td>Address</td>
</tr>
</table>
</body>
</html><?php }
}
