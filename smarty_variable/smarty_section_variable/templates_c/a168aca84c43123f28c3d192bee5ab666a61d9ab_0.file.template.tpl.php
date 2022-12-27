<?php
/* Smarty version 4.3.0, created on 2022-12-21 06:36:00
  from 'C:\xampp\htdocs\smarty\smarty_variable\smarty_section_variable\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a29b409ee8a2_79080023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a168aca84c43123f28c3d192bee5ab666a61d9ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_variable\\smarty_section_variable\\template.tpl',
      1 => 1671600957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a29b409ee8a2_79080023 (Smarty_Internal_Template $_smarty_tpl) {
$__section_ct_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data_id']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ct_0_total = min(ceil(($__section_ct_0_loop - 0)/ 2), $__section_ct_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_ct'] = new Smarty_Variable(array());
if ($__section_ct_0_total !== 0) {
for ($__section_ct_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] = 0; $__section_ct_0_iteration <= $__section_ct_0_total; $__section_ct_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] += 2){
?>
   id: <?php echo $_smarty_tpl->tpl_vars['data_id']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)];?>
<br/>
<?php
}
}
?>

<br/><br/>


<?php }
}
