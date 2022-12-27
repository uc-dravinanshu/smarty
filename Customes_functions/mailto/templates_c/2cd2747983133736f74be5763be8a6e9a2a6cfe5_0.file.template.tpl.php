<?php
/* Smarty version 4.3.0, created on 2022-12-26 12:27:43
  from 'C:\xampp\htdocs\smarty\Customes_functions\mailto\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a9852f2314f3_18723277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2cd2747983133736f74be5763be8a6e9a2a6cfe5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Customes_functions\\mailto\\template.tpl',
      1 => 1672054059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a9852f2314f3_18723277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),));
echo smarty_function_mailto(array('address'=>"me@example.com"),$_smarty_tpl);?>
 <br/><br/>

<a href="mailto:me@example.com" >me@example.com</a>


<br/><br/>


<?php echo smarty_function_mailto(array('address'=>"me@example.com",'encode'=>"javascript"),$_smarty_tpl);?>

<?php echo '<script'; ?>
 type="text/javascript" language="javascript">
   eval(unescape('%64%6f% ... snipped ...%61%3e%27%29%3b'))
<?php echo '</script'; ?>
>

<br/><br/>

<?php echo smarty_function_mailto(array('address'=>"me@example.com",'encode'=>"hex"),$_smarty_tpl);?>

<a href="mailto:%6d%65.. snipped..3%6f%6d">&#x6d;&..snipped...#x6f;&#x6d;</a>

<br/><br/>

<?php echo smarty_function_mailto(array('address'=>"me@example.com",'subject'=>"Hello to you!"),$_smarty_tpl);?>

<a href="mailto:me@example.com?subject=Hello%20to%20you%21" >me@example.com</a>

<br/><br/>

<?php echo smarty_function_mailto(array('address'=>"me@example.com",'cc'=>"you@example.com,they@example.com"),$_smarty_tpl);?>

<a href="mailto:me@example.com?cc=you@example.com,they@example.com" >me@example.com</a>

<br/><br/>

<?php echo smarty_function_mailto(array('address'=>"me@example.com",'extra'=>'class="email"'),$_smarty_tpl);?>

<a href="mailto:me@example.com" class="email">me@example.com</a>

<?php }
}
