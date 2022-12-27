<?php
/* Smarty version 4.3.0, created on 2022-12-24 15:35:37
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\function\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a70e393f5aa4_46460086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '986ad7b8f6f4badc9f7d8adbc2d76fc354d40011' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\function\\template.tpl',
      1 => 1671892534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a70e393f5aa4_46460086 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'myfunction' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\function\\templates_c\\986ad7b8f6f4badc9f7d8adbc2d76fc354d40011_0.file.template.tpl.php',
    'uid' => '986ad7b8f6f4badc9f7d8adbc2d76fc354d40011',
    'call_name' => 'smarty_template_function_myfunction_113147678863a70e393c55b6_45487616',
  ),
));
?>

<?php $_smarty_tpl->_assignInScope('menu', array('item1','item2','item3'=>array('item3-1','item3-2','item3-3'=>array('item3-3-1','item3-3-2')),'item4'));?>

<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'myfunction', array('data'=>$_smarty_tpl->tpl_vars['menu']->value), true);?>




<?php }
/* smarty_template_function_myfunction_113147678863a70e393c55b6_45487616 */
if (!function_exists('smarty_template_function_myfunction_113147678863a70e393c55b6_45487616')) {
function smarty_template_function_myfunction_113147678863a70e393c55b6_45487616(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <ul>
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
      <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'myfunction', array('data'=>$_smarty_tpl->tpl_vars['entry']->value), true);?>
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
/*/ smarty_template_function_myfunction_113147678863a70e393c55b6_45487616 */
}
