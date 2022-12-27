<?php
/* Smarty version 4.3.0, created on 2022-12-25 15:17:24
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\includes\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a85b74c67814_95270167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02645e6c42c1337c9d15e209a2637101093a758d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\includes\\template.tpl',
      1 => 1671977759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_header.tpl' => 1,
    'file:page_footer.tpl' => 1,
  ),
),false)) {
function content_63a85b74c67814_95270167 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<?php $_smarty_tpl->_subTemplateRender('file:page_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>welcome</h1>

<?php $_smarty_tpl->_subTemplateRender('file:page_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
