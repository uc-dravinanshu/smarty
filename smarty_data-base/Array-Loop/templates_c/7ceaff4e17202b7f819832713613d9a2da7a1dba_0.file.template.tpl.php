<?php
/* Smarty version 4.3.0, created on 2022-12-19 12:17:27
  from 'C:\xampp\htdocs\smarty\Ashu\Array-Loop\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a04847ac3ea5_15991225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ceaff4e17202b7f819832713613d9a2da7a1dba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Ashu\\Array-Loop\\template.tpl',
      1 => 1671448644,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a04847ac3ea5_15991225 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <!-- <?php
$__section_customer_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_0_total = $__section_customer_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_0_total !== 0) {
for ($__section_customer_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_0_iteration <= $__section_customer_0_total; $__section_customer_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>
 no: <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['no'];?>

 name: <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['name'];?>

 position: <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['position'];?>

 Address: <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['Address'];?>

 Company: <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['Company'];?>

 <?php
}
}
?> -->

 <?php
$__section_customer_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_customer_1_total = $__section_customer_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_customer'] = new Smarty_Variable(array());
if ($__section_customer_1_total !== 0) {
for ($__section_customer_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] = 0; $__section_customer_1_iteration <= $__section_customer_1_total; $__section_customer_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']++){
?>
   <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['no'];?>
. <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['name'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['position'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['Address'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_customer']->value['index'] : null)]['Company'];?>
<br/>
 <?php
}
}
?>
</body>
</html><?php }
}
