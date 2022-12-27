<?php
/* Smarty version 4.3.0, created on 2022-12-26 08:24:26
  from 'C:\xampp\htdocs\smarty\Customes_functions\eval\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a94c2a9b0f54_41720033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f7a154360188511acb3d307cbb3fb853606ca84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\eval\\template.tpl',
      1 => 1672039427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a94c2a9b0f54_41720033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'setup.conf', null, 0);
?>


<?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title'), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
$_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ErrorCity'), $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch();
$_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'ErrorState'), $_smarty_tpl->smarty, $_smarty_tpl);$_smarty_tpl->assign('state_error',$_template->fetch());
echo $_smarty_tpl->tpl_vars['state_error']->value;
}
}
