<?php
/* Smarty version 4.3.0, created on 2022-12-24 10:48:33
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\foreach-loop\foreach-loop-first\tempalte.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a6caf1d58421_30990275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0636f87221dcb1717e20b5784e78fdc1cad6065e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\foreach-loop\\foreach-loop-first\\tempalte.tpl',
      1 => 1671875310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a6caf1d58421_30990275 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'i');
$_smarty_tpl->tpl_vars['i']->index = -1;
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
$_smarty_tpl->tpl_vars['i']->index++;
$_smarty_tpl->tpl_vars['i']->first = !$_smarty_tpl->tpl_vars['i']->index;
$__foreach_i_0_saved = $_smarty_tpl->tpl_vars['i'];
?>
      <?php if ($_smarty_tpl->tpl_vars['i']->first) {?>
      <?php echo $_smarty_tpl->tpl_vars['i']->first;?>
         <tr>
          <th>key</td>
          <th>name</td>
        </tr>
      <?php }?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['i']->key;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
      </tr>
    <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <?php }
}
