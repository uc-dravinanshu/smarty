<?php
/* Smarty version 4.3.0, created on 2023-02-13 08:38:41
  from 'C:\xampp\htdocs\smarty\New folder\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e9e901c4c3a1_87187596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5811d9e1a5a3ba09fe08dcb24f9611080724c06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\New folder\\template.tpl',
      1 => 1676273918,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e9e901c4c3a1_87187596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<p>
    <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['sometext']->value,true);?>

</p>
<p>
    <?php echo ($_smarty_tpl->tpl_vars['sometext']->value).(' and you can learn this end of the time');?>

</p>
<p>
    <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['sometext']->value, $tmp);?>

</p>
<p>
    <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['sometext']->value, $tmp)+1);?>

</p>
<p>
    <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['sometext']->value, $tmp);?>

</p>
<p>
    <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['sometext']->value, $tmp)+1);?>

</p>
<p>
    <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['sometext']->value, $tmp);?>

</p>
<p>
    <?php echo smarty_modifier_date_format(time());?>

</p>
<p>
    <?php echo smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['config']->value['date']);?>

</p>
<p>
    <?php echo smarty_modifier_date_format(time(),$_smarty_tpl->tpl_vars['config']->value['time']);?>

</p>
<p>
    <?php echo (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? 'no title' ?? null : $tmp);?>

</p>
<p>
    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['articale']->value, ENT_QUOTES, 'UTF-8', true);?>

</p>
<p>
    <?php echo preg_replace('!^!m',str_repeat(' ',100),$_smarty_tpl->tpl_vars['articale']->value);?>

</p>
<p>
    <?php echo mb_strtolower($_smarty_tpl->tpl_vars['articale']->value, 'UTF-8');?>

</p>
<p>
    <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['articale']->value ?? '', 'UTF-8');?>
  
</p><?php }
}
