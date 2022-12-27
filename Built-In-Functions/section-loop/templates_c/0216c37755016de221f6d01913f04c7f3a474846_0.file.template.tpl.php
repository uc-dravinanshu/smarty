<?php
/* Smarty version 4.3.0, created on 2022-12-25 16:49:19
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\section-loop\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a870ff11e637_10722630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0216c37755016de221f6d01913f04c7f3a474846' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\section-loop\\template.tpl',
      1 => 1671983355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a870ff11e637_10722630 (Smarty_Internal_Template $_smarty_tpl) {
$__section_ct_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['custid']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ct_0_total = $__section_ct_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ct'] = new Smarty_Variable(array());
if ($__section_ct_0_total !== 0) {
for ($__section_ct_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] = 0; $__section_ct_0_iteration <= $__section_ct_0_total; $__section_ct_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']++){
?>
 id: <?php echo $_smarty_tpl->tpl_vars['custid']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)];?>
 <br/>
<?php
}
}
?>

<br/><br/>

<?php
$__section_foo_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['custid']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_foo_1_total = min(($__section_foo_1_loop - 0), $__section_foo_1_loop);
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if ($__section_foo_1_total !== 0) {
for ($__section_foo_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 0; $__section_foo_1_iteration <= $__section_foo_1_total; $__section_foo_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']++){
?>
  <?php echo $_smarty_tpl->tpl_vars['custid']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] : null)];?>
<br />
<?php
}
}
}
}
