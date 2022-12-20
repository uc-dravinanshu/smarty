<?php
/* Smarty version 4.3.0, created on 2022-12-19 17:42:59
  from 'C:\xampp\htdocs\smarty\Ashu\Data-base\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a094932dfdc9_09752467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bac65584cbbe41bdf2ec6b2d3119a4dd27ee28ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Ashu\\Data-base\\template.tpl',
      1 => 1671468163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a094932dfdc9_09752467 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php if ($_smarty_tpl->tpl_vars['success']->value == '1') {?>
     <p>Data is saved</p>
    <?php }?>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
            <form action="#" method="post">
                <div class="mb-3">
                  <label for="username" class="form-label">User Name</label>
                  <input type="text" name="name" id="name" class="form-control" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">User Course</label>
                  <input type="text" name="course" id="course" class="form-control" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                  <label for="username" class="form-label">User Collegee</label>
                  <input type="text" name="college" id="college" class="form-control" aria-describedby="emailHelp" required>
                </div>
                <button type="submit" class="btn btn-primary" name="done" value="save">Submit</button>
            </form>
        </div>
      </div>
    </div>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
