<?php
/* Smarty version 4.3.0, created on 2022-12-19 07:38:17
  from 'C:\xampp\htdocs\smarty\Dravinanshu_Smarty\func\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a006d99ff218_75390862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc74b26426211880e99ac53a09b0e4c3f51b7ddd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Dravinanshu_Smarty\\func\\template.tpl',
      1 => 1671431894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a006d99ff218_75390862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty\\Dravinanshu_Smarty\\func\\templates_c\\bc74b26426211880e99ac53a09b0e4c3f51b7ddd_0.file.template.tpl.php',
    'uid' => 'bc74b26426211880e99ac53a09b0e4c3f51b7ddd',
    'call_name' => 'smarty_template_function_menu_89052266263a006d99d4ec7_18451067',
  ),
));
?>



<?php $_smarty_tpl->_assignInScope('menu', array('item1','item2','item3'=>array('item3-1','item3-2','item3-3'=>array('item3-3-1','item3-3-2')),'item4'));?>

<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu', array('data'=>$_smarty_tpl->tpl_vars['menu']->value), true);
}
/* smarty_template_function_menu_89052266263a006d99d4ec7_18451067 */
if (!function_exists('smarty_template_function_menu_89052266263a006d99d4ec7_18451067')) {
function smarty_template_function_menu_89052266263a006d99d4ec7_18451067(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_menu_89052266263a006d99d4ec7_18451067 */
}
