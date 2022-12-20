<?php
/* Smarty version 4.3.0, created on 2022-12-19 10:56:37
  from 'C:\xampp\htdocs\smarty\Dravinanshu_Smarty\Arithmetic\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a035550166f5_67166933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d75556ae70fb62feb2c5fc3df2830731b17b04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Dravinanshu_Smarty\\Arithmetic\\index.tpl',
      1 => 1671443793,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a035550166f5_67166933 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="sum">
      sum:  <?php echo $_smarty_tpl->tpl_vars['sum']->value;?>

    </div>
    <div class="sub">
        Sub: <?php echo $_smarty_tpl->tpl_vars['sub']->value;?>

    </div>
    <div class="mul">
        mul: <?php echo $_smarty_tpl->tpl_vars['mul']->value;?>

    </div>
    <div class="div">
        divison: <?php echo $_smarty_tpl->tpl_vars['div']->value;?>

    </div>
    <div class="mod">
        Modulation: <?php echo $_smarty_tpl->tpl_vars['mod']->value;?>

    </div>


</body>
</html><?php }
}
