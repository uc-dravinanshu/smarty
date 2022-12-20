<?php
/* Smarty version 4.3.0, created on 2022-12-19 08:16:12
  from 'C:\xampp\htdocs\smarty\Dravinanshu_Smarty\func\template-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a00fbc961591_17698444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a26fcd3de4b46ac4007804c6e988393c19fe5d9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Dravinanshu_Smarty\\func\\template-1.tpl',
      1 => 1671434169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a00fbc961591_17698444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty\\Dravinanshu_Smarty\\func\\templates_c\\a26fcd3de4b46ac4007804c6e988393c19fe5d9f_0.file.template-1.tpl.php',
    'uid' => 'a26fcd3de4b46ac4007804c6e988393c19fe5d9f',
    'call_name' => 'smarty_template_function_menu_111368820663a00fbc8dda79_27331025',
  ),
));
?><!--  -->






<?php $_smarty_tpl->_assignInScope('menu', array('item1','item2','item3'=>array('item3-1','item3-2','item3-3'=>array('item3-3-1','item3-3-2')),'item4'));?>

<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['menu']->value), true);?>


<?php }
/* smarty_template_function_menu_111368820663a00fbc8dda79_27331025 */
if (!function_exists('smarty_template_function_menu_111368820663a00fbc8dda79_27331025')) {
function smarty_template_function_menu_111368820663a00fbc8dda79_27331025(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('hello'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>


 <ul class="hello<?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'entry');
$_smarty_tpl->tpl_vars['entry']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->do_else = false;
$__foreach_entry_0_saved = $_smarty_tpl->tpl_vars['entry'];
?>
     <?php if (is_array($_smarty_tpl->tpl_vars['entry']->value)) {?>
              <li><?php echo $_smarty_tpl->tpl_vars['entry']->key;?>
</li>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value,'hello'=>$_smarty_tpl->tpl_vars['hello']->value+1), true);?>

       <?php } else { ?>
       <li><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
     <?php }?>
   <?php
$_smarty_tpl->tpl_vars['entry'] = $__foreach_entry_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 </ul>

<?php
}}
/*/ smarty_template_function_menu_111368820663a00fbc8dda79_27331025 */
}
