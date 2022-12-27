<?php
/* Smarty version 4.3.0, created on 2022-12-25 17:15:39
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\section-s\looping-associative-array\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a8772b0727e0_86418917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70cccfbd3b23259a6915321e43ffb6cfc11c4e58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\section-s\\looping-associative-array\\template.tpl',
      1 => 1671984903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a8772b0727e0_86418917 (Smarty_Internal_Template $_smarty_tpl) {
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['contacts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_total = $__section_customer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total !== 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>
<p>
  name: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['name'];?>
<br />
  home: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['home'];?>
<br />
  cell: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['cell'];?>
<br />
  e-mail: <?php echo $_smarty_tpl->tpl_vars['contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['email'];?>

</p>
<?php
}
}
}
}
