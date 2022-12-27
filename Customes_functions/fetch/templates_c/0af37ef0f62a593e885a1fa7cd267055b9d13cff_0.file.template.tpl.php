<?php
/* Smarty version 4.3.0, created on 2022-12-26 09:37:00
  from 'C:\xampp\htdocs\smarty\Customes_functions\fetch\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a95d2cec2ff9_00974573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0af37ef0f62a593e885a1fa7cd267055b9d13cff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\fetch\\template.tpl',
      1 => 1672041524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a95d2cec2ff9_00974573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.fetch.php','function'=>'smarty_function_fetch',),));
echo smarty_function_fetch(array('file'=>'http://www.myweather.com/68502/'),$_smarty_tpl);?>
 
welcome<br/><br/>

<?php $_smarty_tpl->_assignInScope('weather', 'welcome back');
echo smarty_function_fetch(array('file'=>'http://www.myweather.com/68502/','assign'=>'weather'),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['weather']->value != '') {?>
  <div id="weather"><?php echo $_smarty_tpl->tpl_vars['weather']->value;?>
</div>
<?php }?>





<?php }
}
