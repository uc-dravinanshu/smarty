<?php
/* Smarty version 4.3.0, created on 2022-12-25 17:34:00
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\section-s\section-demonstration\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a87b781f0a81_23577632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1001a9235987b39f833fe77aecc68ea9bda7bfad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\section-s\\section-demonstration\\template.tpl',
      1 => 1671986002,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a87b781f0a81_23577632 (Smarty_Internal_Template $_smarty_tpl) {
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['custid']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_total = $__section_customer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total !== 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>
<p>
  id: <?php echo $_smarty_tpl->tpl_vars['custid']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)];?>
<br />
  name: <?php echo $_smarty_tpl->tpl_vars['name']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)];?>
<br />
  address: <?php echo $_smarty_tpl->tpl_vars['address']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)];?>

</p>
<?php
}
}
}
}
