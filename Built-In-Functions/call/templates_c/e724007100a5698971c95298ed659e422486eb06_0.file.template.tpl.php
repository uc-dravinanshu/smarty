<?php
/* Smarty version 4.3.0, created on 2022-12-22 08:03:54
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\call\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a4015ab2b415_38706341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e724007100a5698971c95298ed659e422486eb06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\call\\template.tpl',
      1 => 1671692602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a4015ab2b415_38706341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\call\\templates_c\\e724007100a5698971c95298ed659e422486eb06_0.file.template.tpl.php',
    'uid' => 'e724007100a5698971c95298ed659e422486eb06',
    'call_name' => 'smarty_template_function_menu_21263520563a4015aafd7e0_67683111',
  ),
));
?>


<?php $_smarty_tpl->_assignInScope('menu', array('first','second','third'=>array('third-1','third-2','third-3'=>array('third-1-1','third-1-2','third-1-3')),'fourth'));?>

<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['menu']->value), true);?>


<?php }
/* smarty_template_function_menu_21263520563a4015aafd7e0_67683111 */
if (!function_exists('smarty_template_function_menu_21263520563a4015aafd7e0_67683111')) {
function smarty_template_function_menu_21263520563a4015aafd7e0_67683111(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('level'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <ul class="level<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
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
       <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['entry']->value,'level'=>$_smarty_tpl->tpl_vars['level']->value+1), true);?>

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
/*/ smarty_template_function_menu_21263520563a4015aafd7e0_67683111 */
}
