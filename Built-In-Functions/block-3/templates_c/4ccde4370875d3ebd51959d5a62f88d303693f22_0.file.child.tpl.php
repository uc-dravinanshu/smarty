<?php
/* Smarty version 4.3.0, created on 2022-12-22 07:21:17
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\block-3\child.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a3f75d6b5e78_98124773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ccde4370875d3ebd51959d5a62f88d303693f22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\block-3\\child.tpl',
      1 => 1671689769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a3f75d6b5e78_98124773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59703374863a3f75d6b44c1_96254855', "title");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "parent.tpl");
}
/* {block "title"} */
class Block_59703374863a3f75d6b44c1_96254855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_59703374863a3f75d6b44c1_96254855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

Child Title
<?php
}
}
/* {/block "title"} */
}
