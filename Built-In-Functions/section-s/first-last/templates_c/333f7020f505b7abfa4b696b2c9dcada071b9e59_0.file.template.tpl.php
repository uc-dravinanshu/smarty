<?php
/* Smarty version 4.3.0, created on 2022-12-26 07:04:45
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\section-s\first-last\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a9397d75f993_96124278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333f7020f505b7abfa4b696b2c9dcada071b9e59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\section-s\\first-last\\template.tpl',
      1 => 1672034682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a9397d75f993_96124278 (Smarty_Internal_Template $_smarty_tpl) {
$__section_ct_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['items']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ct_0_start = min(0, $__section_ct_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_ct'] = new Smarty_Variable(array('total' => min(ceil(($__section_ct_0_loop - $__section_ct_0_start)/ 2), $__section_ct_0_loop)));
if ($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['total'] !== 0) {
for ($__section_ct_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] = $__section_ct_0_start; $__section_ct_0_iteration <= $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['total']; $__section_ct_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] += 2){
$_smarty_tpl->tpl_vars['__smarty_section_ct']->value['first'] = ($__section_ct_0_iteration === 1);
$_smarty_tpl->tpl_vars['__smarty_section_ct']->value['last'] = ($__section_ct_0_iteration === $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['total']);
?>
  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['first'] : null)) {?>
    <table>
    <tr>
       <th>id</th>
       <th>customer</th>
    </tr>
  <?php }?>

  <tr>
    <?php echo $_smarty_tpl->tpl_vars['items']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_start']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_start']->value['index'] : null)]['id'];?>

  </tr>
<!-- 
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['customers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_start']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_start']->value['index'] : null)]['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['customers']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_start']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_start']->value['index'] : null)]['name'];?>
</td>
  </tr>

  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['last'] : null)) {?>
    <tr><td></td><td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['total'] : null);?>
 customers</td></tr>
    </table>
  <?php }?> -->
<?php
}
}
}
}
