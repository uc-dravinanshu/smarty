<?php
/* Smarty version 4.3.0, created on 2022-12-26 06:11:32
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\section-s\section_Properties\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a92d04b66a25_70185410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9dc0af6ae0def602e6116c479bbde45e3e95093' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\section-s\\section_Properties\\template.tpl',
      1 => 1672031489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a92d04b66a25_70185410 (Smarty_Internal_Template $_smarty_tpl) {
$__section_cu_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cu_0_start = min(5, $__section_cu_0_loop);
$__section_cu_0_total = min(ceil(($__section_cu_0_loop - $__section_cu_0_start)/ 2), $__section_cu_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_cu'] = new Smarty_Variable(array());
if ($__section_cu_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_cu']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_cu']->value['index'] = $__section_cu_0_start; $_smarty_tpl->tpl_vars['__smarty_section_cu']->value['iteration'] <= $__section_cu_0_total; $_smarty_tpl->tpl_vars['__smarty_section_cu']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_cu']->value['index'] += 2){
?>
  iteration=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_cu']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cu']->value['iteration'] : null);?>
<br/>
  index=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_cu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cu']->value['index'] : null);?>
 
  id=<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cu']->value['index'] : null)];?>
<br /> 
<?php
}
}
}
}
