<?php
/* Smarty version 4.3.0, created on 2022-12-24 18:21:54
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\if-else-elseif\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a735321100f9_57208339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58de94f19cd2931722fbe552553a35ff312df3d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\if-else-elseif\\template.tpl',
      1 => 1671902510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a735321100f9_57208339 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['name']->value == 'Ashu Mishra') {?>
    Welcome Sir <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.
<?php } elseif ($_smarty_tpl->tpl_vars['name']->value == 'Wilma') {?>
    Welcome Ma'am <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.
<?php } else { ?>
    Welcome, whatever you are <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
.
<?php }?>

<br/><br/>


 
<?php if ($_smarty_tpl->tpl_vars['name']->value == 'Ashu Mishra' || $_smarty_tpl->tpl_vars['name']->value == 'Abhishek Mishra') {?>
  welcome Mr. <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

  <?php } else { ?>
  welcome but <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 is not match.
<?php }?>

<br/>



<?php if (($_smarty_tpl->tpl_vars['amount']->value < 0 || $_smarty_tpl->tpl_vars['amount']->value > 1000)) {?>
  welcome  your <?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
 
<?php }?>

<br/>
<?php $_smarty_tpl->_assignInScope('var', 100);
if (!($_smarty_tpl->tpl_vars['var']->value % 4)) {?>
   welcome <?php echo $_smarty_tpl->tpl_vars['var']->value;?>

<?php }?>


<br/>
<br/>

<?php if (!(1 & $_smarty_tpl->tpl_vars['var']->value / 2)) {?>
   even number <?php echo $_smarty_tpl->tpl_vars['var']->value;?>

<?php }?>

<?php if (!(1 & $_smarty_tpl->tpl_vars['var']->value / 3)) {?>
   odd number <?php echo $_smarty_tpl->tpl_vars['var']->value;?>

<?php }?>

<?php }
}
