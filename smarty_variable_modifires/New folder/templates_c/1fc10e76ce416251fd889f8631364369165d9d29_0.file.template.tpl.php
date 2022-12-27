<?php
/* Smarty version 4.3.0, created on 2022-12-21 10:20:27
  from 'C:\xampp\htdocs\smarty\smarty_variable_modifires\New folder\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a2cfdb1bdd84_71636212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fc10e76ce416251fd889f8631364369165d9d29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_variable_modifires\\New folder\\template.tpl',
      1 => 1671614423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a2cfdb1bdd84_71636212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.spacify.php','function'=>'smarty_modifier_spacify',),));
?>
capitalize: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['someTitle']->value);?>
 <br/>
uppercase: <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['someTitle']->value ?? '', 'UTF-8');?>
 <br/>
count_characters: <?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['someTitle']->value, $tmp);?>
 <br/>
count_paragraph: <?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['someTitle']->value, $tmp)+1);?>
 <br/>
count_sentences: <?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['someTitle']->value, $tmp);?>
 <br/>
count_words: <?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['someTitle']->value, $tmp);?>
 <br/>
date_format: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['someTitle']->value);?>
<br/>
default: <?php echo (($tmp = $_smarty_tpl->tpl_vars['someTitle']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
 <br/>
escape: <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['articleTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
 <br/>
escape: <?php echo htmlentities(mb_convert_encoding((string)$_smarty_tpl->tpl_vars['articleTitle']->value, 'UTF-8', 'UTF-8'), ENT_QUOTES, 'UTF-8', true);?>
 <br/>
from_charset: <?php echo mb_convert_encoding($_smarty_tpl->tpl_vars['someTitle']->value, "UTF-8", "ISO-8859-1");?>
 <br/> <br/>

 indent: <?php echo preg_replace('!^!m',str_repeat(' ',4),$_smarty_tpl->tpl_vars['articleTitle']->value);?>
 <br/>

 indent: <?php echo preg_replace('!^!m',str_repeat(' ',10),$_smarty_tpl->tpl_vars['articleTitle']->value);?>
 <br/>

 indent: <?php echo preg_replace('!^!m',str_repeat("\t",1),$_smarty_tpl->tpl_vars['articleTitle']->value);?>
 <br/>

 lower: <?php echo mb_strtolower($_smarty_tpl->tpl_vars['someTitle']->value, 'UTF-8');?>
 <br/>
nl2br: <?php echo nl2br((string) $_smarty_tpl->tpl_vars['someTitle']->value, (bool) 1);?>
 <br/>
regex_replace: <?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['articleTitle']->value,"/[\r\t\n]/"," ");?>
 <br/>

replace: <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['someTitle']->value,'dravinanshu','Ashu');?>
</br>
specify: <?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['someTitle']->value);?>
 <br/>
specify: <?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['someTitle']->value,'^^');?>
 <br/>
format_string: <?php echo $_smarty_tpl->tpl_vars['number']->value;?>
 <br/>
format_string: <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['number']->value);?>
 <br/>
format_string: <?php echo sprintf("%d",$_smarty_tpl->tpl_vars['number']->value);?>

 <br/>
<?php }
}
