<?php
/* Smarty version 4.3.0, created on 2022-12-26 12:17:20
  from 'C:\xampp\htdocs\smarty\Customes_functions\html_table\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a982c0bd27f7_79223507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75eb2b0bbc1daf7a392e1f8aec254a2829e7b941' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\html_table\\template.tpl',
      1 => 1672053435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a982c0bd27f7_79223507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_table.php','function'=>'smarty_function_html_table',),));
echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value),$_smarty_tpl);?>

<br/><br/>
<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value,'cols'=>4,'table_attr'=>'border="2"'),$_smarty_tpl);?>

<br/><br/>
<?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['data']->value,'cols'=>"first,second,third,fourth",'tr_attr'=>$_smarty_tpl->tpl_vars['tr']->value),$_smarty_tpl);
}
}
