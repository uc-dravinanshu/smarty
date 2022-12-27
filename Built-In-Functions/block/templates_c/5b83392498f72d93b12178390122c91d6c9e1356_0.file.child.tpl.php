<?php
/* Smarty version 4.3.0, created on 2022-12-22 06:53:39
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\block\child.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a3f0e38b9ca5_62432947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b83392498f72d93b12178390122c91d6c9e1356' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\block\\child.tpl',
      1 => 1671688411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a3f0e38b9ca5_62432947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42154555463a3f0e38b6490_80878385', "title");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "parent.tpl");
}
/* {block "title"} */
class Block_42154555463a3f0e38b6490_80878385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_42154555463a3f0e38b6490_80878385',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

   Hotel Booking Website
<?php
}
}
/* {/block "title"} */
}
