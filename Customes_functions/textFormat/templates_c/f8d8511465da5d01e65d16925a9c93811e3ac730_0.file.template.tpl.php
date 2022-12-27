<?php
/* Smarty version 4.3.0, created on 2022-12-26 13:10:35
  from 'C:\xampp\htdocs\smarty\Customes_functions\textFormat\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a98f3b63f669_66195034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8d8511465da5d01e65d16925a9c93811e3ac730' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\textFormat\\template.tpl',
      1 => 1672056630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a98f3b63f669_66195034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\block.textformat.php','function'=>'smarty_block_textformat',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textformat', array('wrap'=>40,'style'=>"email",'indent'=>4));
$_block_repeat=true;
echo smarty_block_textformat(array('wrap'=>40,'style'=>"email",'indent'=>4), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam nulla, 
    voluptate totam a eveniet quia veritatis vitae eaque. Omnis, labore fugiat.
    A corrupti veritatis, reprehenderit eligendi animi ullam neque sequi inventore 
<?php $_block_repeat=false;
echo smarty_block_textformat(array('wrap'=>40,'style'=>"email",'indent'=>4), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
