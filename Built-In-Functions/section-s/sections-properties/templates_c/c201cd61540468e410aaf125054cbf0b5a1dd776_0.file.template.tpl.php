<?php
/* Smarty version 4.3.0, created on 2022-12-25 18:11:13
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\section-s\sections-properties\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a884319951d1_09399665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c201cd61540468e410aaf125054cbf0b5a1dd776' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\section-s\\sections-properties\\template.tpl',
      1 => 1671988269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a884319951d1_09399665 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
  <tr>
    <th>index</th><th>id</th>
    <th>index_prev</th><th>prev_id</th>
    <th>index_next</th><th>next_id</th>
  </tr>
<?php
$__section_row_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['rows']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_row_0_total = $__section_row_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new Smarty_Variable(array());
if ($__section_row_0_total !== 0) {
for ($__section_row_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_0_iteration <= $__section_row_0_total; $__section_row_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_prev'] = $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] - 1;
$_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_next'] = $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] + 1;
?>
  <tr>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['rows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)];?>
</td>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_prev'] : null);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['rows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_prev']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_prev'] : null)];?>
</td>
    <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_next'] : null);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['rows']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_next']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index_next'] : null)];?>
</td>
  </tr>
<?php
}
}
?>
</table><?php }
}
