<?php
/* Smarty version 4.3.0, created on 2022-12-21 18:02:58
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\block\parent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a33c4264ef21_38786600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e087678aae59636025f488ccb193073c80e912c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\block\\parent.tpl',
      1 => 1671642175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a33c4264ef21_38786600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
  <head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94972222263a33c4264d005_58895883', "title");
?>
</title>
  </head>
  <body>
    <h1>welcome to the block function</h1>
  </body>
</html><?php }
/* {block "title"} */
class Block_94972222263a33c4264d005_58895883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_94972222263a33c4264d005_58895883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Default Title<?php
}
}
/* {/block "title"} */
}
