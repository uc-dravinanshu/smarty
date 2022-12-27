<?php
/* Smarty version 4.3.0, created on 2022-12-22 07:22:00
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\block-3\parent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a3f788f39de1_06830947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2266f443c96b62dcc3e710029e2b9ca944e9133e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\block-3\\parent.tpl',
      1 => 1671690117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a3f788f39de1_06830947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
  <head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157114521563a3f788f37722_82754731', "title");
?>
</title>
  </head>
</html><?php }
/* {block "title"} */
class Block_157114521563a3f788f37722_82754731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_157114521563a3f788f37722_82754731',
  ),
);
public $callsChild = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
The <?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
 was inserted here<?php
}
}
/* {/block "title"} */
}
