<?php
/* Smarty version 4.3.0, created on 2022-12-20 11:48:47
  from 'C:\xampp\htdocs\smarty\Ashu\images-upload\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a1930fde2a07_06765948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06e83d2b0af6ebf51e0bcf0b543b4ad354e8b662' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Ashu\\images-upload\\index.tpl',
      1 => 1671530304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1930fde2a07_06765948 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Upload An Image</label>
                        <input class="form-control mb-3" type="file" name="image" required>
                        <input type="submit" name="upload"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['success']->value == '1') {?>
         <img src="upload/<?php echo $_smarty_tpl->tpl_vars['fn']->value;?>
" alt="error">
    <?php }?>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
