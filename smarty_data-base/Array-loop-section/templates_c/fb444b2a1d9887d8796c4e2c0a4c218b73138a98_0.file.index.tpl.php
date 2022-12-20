<?php
/* Smarty version 4.3.0, created on 2022-12-19 13:20:37
  from 'C:\xampp\htdocs\smarty\Ashu\Array-loop-section\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0571597f853_67349513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb444b2a1d9887d8796c4e2c0a4c218b73138a98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Ashu\\Array-loop-section\\index.tpl',
      1 => 1671452434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0571597f853_67349513 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$__section_ct_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ct_0_total = $__section_ct_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ct'] = new Smarty_Variable(array());
if ($__section_ct_0_total !== 0) {
for ($__section_ct_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] = 0; $__section_ct_0_iteration <= $__section_ct_0_total; $__section_ct_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']++){
?>
       <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['No'];?>
. <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['Name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['Post'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['Company'];?>
 - 

       <?php
$__section_ct2_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['Working']) ? count($_loop) : max(0, (int) $_loop));
$__section_ct2_1_total = $__section_ct2_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ct2'] = new Smarty_Variable(array());
if ($__section_ct2_1_total !== 0) {
for ($__section_ct2_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ct2']->value['index'] = 0; $__section_ct2_1_iteration <= $__section_ct2_1_total; $__section_ct2_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ct2']->value['index']++){
?>
         <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['Working'][(isset($_smarty_tpl->tpl_vars['__smarty_section_ct2']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct2']->value['index'] : null)]['Working'];?>

       <?php
}
}
?>
       <br/>
    <?php
}
}
?>
</body>
</html><?php }
}
