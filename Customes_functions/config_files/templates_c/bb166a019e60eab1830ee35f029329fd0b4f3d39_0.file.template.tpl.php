<?php
/* Smarty version 4.3.0, created on 2022-12-26 13:31:14
  from 'C:\xampp\htdocs\smarty\Customes_functions\config_files\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a99412dcd151_85730157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb166a019e60eab1830ee35f029329fd0b4f3d39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\config_files\\template.tpl',
      1 => 1672057871,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a99412dcd151_85730157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'demo.conf', null, 0);
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
    <td>First:</td>
    <td>Last</td>
<?php }
}
