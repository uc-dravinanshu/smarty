<?php
/* Smarty version 4.3.0, created on 2022-12-19 05:36:06
  from 'C:\xampp\htdocs\smarty\Dravinanshu_Smarty\Varibale_name\mytemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_639fea3615c587_94454982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79b520bb6aa7d745634f859ff428a53a2ca8387d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Dravinanshu_Smarty\\Varibale_name\\mytemplate.tpl',
      1 => 1671424562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_639fea3615c587_94454982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1 tabindex="0">varibale of Smarty PHP</h1>
     string: <?php echo $_smarty_tpl->tpl_vars['str']->value;?>


          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'name');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
       <!--   --><li><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li><!--  -->
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  

     
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['us']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
     <?php echo $_smarty_tpl->tpl_vars['user']->value;
echo $_smarty_tpl->tpl_vars['user']->value;?>
 
     <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

   <br/><br/>
     

           <table>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['datas']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
      <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#aaaaaa, #bbbbbb"),$_smarty_tpl);?>
"><td><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value['post'];?>
</td></tr>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </table>


      
</body>
</html><?php }
}
