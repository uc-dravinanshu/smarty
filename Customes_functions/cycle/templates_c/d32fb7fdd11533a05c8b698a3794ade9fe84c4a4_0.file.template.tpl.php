<?php
/* Smarty version 4.3.0, created on 2022-12-26 08:12:45
  from 'C:\xampp\htdocs\smarty\Customes_functions\cycle\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a9496d0fee56_89389464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd32fb7fdd11533a05c8b698a3794ade9fe84c4a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\cycle\\template.tpl',
      1 => 1672038761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a9496d0fee56_89389464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<table>
  <?php
$__section_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_rows_0_total = $__section_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rows'] = new Smarty_Variable(array());
if ($__section_rows_0_total !== 0) {
for ($__section_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] = 0; $__section_rows_0_iteration <= $__section_rows_0_total; $__section_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']++){
?>
<tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
">
   <td><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rows']->value['index'] : null)];?>
</td>
</tr>
<?php
}
}
?>
</table><?php }
}
