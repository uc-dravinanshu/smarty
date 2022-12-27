<?php
/* Smarty version 4.3.0, created on 2022-12-26 07:49:58
  from 'C:\xampp\htdocs\smarty\Customes_functions\counter\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a94416b3edf0_04323311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23cc589ef64690448f33542acb5164ad7ee11edd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\counter\\template.tpl',
      1 => 1672037388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a94416b3edf0_04323311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
echo smarty_function_counter(array('start'=>0,'skip'=>2),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br />
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
<br /><?php }
}
