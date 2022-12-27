<?php
/* Smarty version 4.3.0, created on 2022-12-25 15:29:19
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\includes-2\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a85e3f9e1650_63453212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b89fcf7598c493b0a91357ec04629ae1a731741' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\includes-2\\template.tpl',
      1 => 1671978555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:links.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63a85e3f9e1650_63453212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Newest links','links'=>$_smarty_tpl->tpl_vars['link_array']->value), 0, false);
?>

<p>this is template.tpl file</p>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('foo'=>'bar'), 0, false);
}
}
