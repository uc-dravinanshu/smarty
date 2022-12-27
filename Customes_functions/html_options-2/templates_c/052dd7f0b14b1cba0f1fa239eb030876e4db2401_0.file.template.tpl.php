<?php
/* Smarty version 4.3.0, created on 2022-12-26 10:40:24
  from 'C:\xampp\htdocs\smarty\Customes_functions\html_options-2\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a96c084717f8_28617253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '052dd7f0b14b1cba0f1fa239eb030876e4db2401' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\html_options-2\\template.tpl',
      1 => 1672047610,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a96c084717f8_28617253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<select name="customer_id" size="<?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['cust_names']->value);?>
">
   <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['cust_ids']->value,'output'=>$_smarty_tpl->tpl_vars['cust_names']->value,'selected'=>$_smarty_tpl->tpl_vars['customer_id']->value),$_smarty_tpl);?>

</select><?php }
}
