<?php
/* Smarty version 4.3.0, created on 2022-12-24 18:59:31
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\elseif-elseif\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a73e03c43b67_64529928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a055fc8bff2cb866b6542247c68dc3b4c8feb691' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\elseif-elseif\\template.tpl',
      1 => 1671904768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a73e03c43b67_64529928 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('name', "Dravinanshu Mishra");?>

<?php if ((isset($_smarty_tpl->tpl_vars['name']->value)) && $_smarty_tpl->tpl_vars['name']->value == 'anshu Mishra') {?>
          welcome <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<?php } else {
ob_start();
echo $_smarty_tpl->tpl_vars['foo']->value['name'];
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['name']->value == $_prefixVariable1) {?>
        ok same <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

    <?php } else { ?>
     NOT SAME
<?php }}?>
<br/>
<?php if (is_array($_smarty_tpl->tpl_vars['foo']->value) && count($_smarty_tpl->tpl_vars['foo']->value) > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['foo']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
     <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
 <br/>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
