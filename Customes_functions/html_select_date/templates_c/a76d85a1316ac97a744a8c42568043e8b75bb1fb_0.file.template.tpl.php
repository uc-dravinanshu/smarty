<?php
/* Smarty version 4.3.0, created on 2022-12-26 11:24:54
  from 'C:\xampp\htdocs\smarty\Customes_functions\html_select_date\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a97676128335_23611909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a76d85a1316ac97a744a8c42568043e8b75bb1fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\html_select_date\\template.tpl',
      1 => 1672050291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a97676128335_23611909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),));
?>

<?php $_smarty_tpl->_assignInScope('time', smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S'));?>

<?php echo smarty_function_html_select_date(array('prefix'=>'StartDate','time'=>$_smarty_tpl->tpl_vars['time']->value,'start_year'=>'-100','end_year'=>'+1','display_days'=>true),$_smarty_tpl);?>


 <br/><br/><br/><br/><br/>  
<?php echo smarty_function_html_select_date(array(),$_smarty_tpl);?>


<?php echo smarty_modifier_date_format(time(),'%H:%M:%S');?>
 <?php }
}
