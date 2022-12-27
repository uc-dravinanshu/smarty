<?php
/* Smarty version 4.3.0, created on 2022-12-25 17:02:55
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\section-s\section-without-assigning-array\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a8742f6f4cd7_33642816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b60e1e3ba65dbf06fc42956651db935ac75fa9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\section-s\\section-without-assigning-array\\template.tpl',
      1 => 1671984171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a8742f6f4cd7_33642816 (Smarty_Internal_Template $_smarty_tpl) {
$__section_ct_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data_array']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ct_0_total = min(($__section_ct_0_loop - 0), $__section_ct_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_ct'] = new Smarty_Variable(array());
if ($__section_ct_0_total !== 0) {
for ($__section_ct_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] = 0; $__section_ct_0_iteration <= $__section_ct_0_total; $__section_ct_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']++){
?>
  id: <?php echo $_smarty_tpl->tpl_vars['data_array']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)];?>
 <br/>
<?php
}
}
?>

<?php
$_smarty_tpl->tpl_vars['__smarty_section_foo'] = new Smarty_Variable(array());
if (true) {
for ($__section_foo_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] = 10; $__section_foo_1_iteration <= 5; $__section_foo_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] += 2){
?>
  <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_foo']->value['index'] : null);?>

<?php
}
}
?>

<br/><br/>

<?php
$_smarty_tpl->tpl_vars['__smarty_section_bar'] = new Smarty_Variable(array());
if (true) {
for ($__section_bar_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_bar']->value['index'] = 20; $__section_bar_2_iteration <= 6; $__section_bar_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_bar']->value['index'] -= 2){
?>
  <?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_bar']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_bar']->value['index'] : null);?>

<?php
}
}
}
}
