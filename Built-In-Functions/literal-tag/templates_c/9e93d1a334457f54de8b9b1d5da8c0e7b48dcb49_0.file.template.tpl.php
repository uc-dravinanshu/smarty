<?php
/* Smarty version 4.3.0, created on 2022-12-25 16:15:20
  from 'C:\xampp\htdocs\smarty\Built-In-Functions\literal-tag\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a86908a8f956_63357015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e93d1a334457f54de8b9b1d5da8c0e7b48dcb49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Built-In-Functions\\literal-tag\\template.tpl',
      1 => 1671981316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a86908a8f956_63357015 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome </h1>
    <?php echo '<script'; ?>
>
        // the following braces are ignored by Smarty
        // since they are surrounded by whitespace
        function myFoo() {
          alert('Foo!');
        }
        myFoo();
        // this one will need literal escapement
        
          function myBar() {
            alert('Bar!');
           }
         mybar();

        
  
     <?php echo '</script'; ?>
>
</body>
</html><?php }
}
