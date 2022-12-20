<?php
/* Smarty version 4.3.0, created on 2022-12-19 08:36:45
  from 'C:\xampp\htdocs\smarty\Dravinanshu_Smarty\func\template-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a0148da37e94_96067802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07b197464ea9ec4d8449a61e054f6de5b23913bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Dravinanshu_Smarty\\func\\template-2.tpl',
      1 => 1671435389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a0148da37e94_96067802 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['Name']->value;?>


<?php echo $_smarty_tpl->tpl_vars['product']->value['part_no'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</b>

<?php echo $_smarty_tpl->tpl_vars['Contacts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)]['Phone'];?>


<body bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bgcolor');?>
"><?php }
}
