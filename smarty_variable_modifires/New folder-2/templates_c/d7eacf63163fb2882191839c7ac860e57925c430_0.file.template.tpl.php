<?php
/* Smarty version 4.3.0, created on 2022-12-21 11:25:26
  from 'C:\xampp\htdocs\smarty\smarty_variable_modifires\New folder-2\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a2df164d6746_37446247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7eacf63163fb2882191839c7ac860e57925c430' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_variable_modifires\\New folder-2\\template.tpl',
      1 => 1671618183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a2df164d6746_37446247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.mb_wordwrap.php','function'=>'smarty_modifier_mb_wordwrap',),));
?>

<?php echo $_smarty_tpl->tpl_vars['articleTitle']->value;?>
 <br/>
<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['articleTitle']->value);?>
 <br/>
<?php echo preg_replace('!\s+!u', '&nbsp; &nbsp; &nbsp;',$_smarty_tpl->tpl_vars['articleTitle']->value);?>
 <br/>

<br/><br/>
<?php echo $_smarty_tpl->tpl_vars['article']->value;?>
 <br>
<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value ?: '');?>
  <br/><?php echo strip_tags((string) $_smarty_tpl->tpl_vars['article']->value);?>
 <br/>
<br/><br/>
<?php echo $_smarty_tpl->tpl_vars['articles']->value;?>


<?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['articles']->value,30,"\n",false);?>
 <br/>

<?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['articles']->value,20,"\n",false);?>
 <br/>

<?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['articles']->value,30,"<br />\n",false);?>
 <br/>

<?php echo smarty_modifier_mb_wordwrap($_smarty_tpl->tpl_vars['articles']->value,26,"\n",true);?>

<br/><br/><br/>

<?php }
}
