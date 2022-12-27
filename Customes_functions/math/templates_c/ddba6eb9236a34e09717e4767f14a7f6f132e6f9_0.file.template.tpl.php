<?php
/* Smarty version 4.3.0, created on 2022-12-26 12:57:22
  from 'C:\xampp\htdocs\smarty\Customes_functions\math\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a98c22e9d954_37797517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddba6eb9236a34e09717e4767f14a7f6f132e6f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\math\\template.tpl',
      1 => 1672055836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a98c22e9d954_37797517 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>
   <?php $_smarty_tpl->_assignInScope('height', 4);?> 
   <?php $_smarty_tpl->_assignInScope('width', 5);?>
   <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['height']->value,'y'=>$_smarty_tpl->tpl_vars['width']->value),$_smarty_tpl);?>


   <br/><br/>

   
   <?php echo smarty_function_math(array('equation'=>"(( x + y ) / z )",'x'=>2,'y'=>10,'z'=>2),$_smarty_tpl);?>


   <br/><br/>

   
   
   <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>4.4444,'y'=>5.0000,'format'=>"%.2f"),$_smarty_tpl);
}
}
