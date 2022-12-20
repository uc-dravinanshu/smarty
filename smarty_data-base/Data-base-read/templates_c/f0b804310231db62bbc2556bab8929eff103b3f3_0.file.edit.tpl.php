<?php
/* Smarty version 4.3.0, created on 2022-12-20 07:45:13
  from 'C:\xampp\htdocs\smarty\Ashu\Data-base-read\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a159f9035395_11009497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0b804310231db62bbc2556bab8929eff103b3f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Ashu\\Data-base-read\\edit.tpl',
      1 => 1671518645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a159f9035395_11009497 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit-file</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="#" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"/>
                     <div class="mb-3">
                       <label for="username" class="form-label">User Name</label>
                       <input type="text" name="name" id="name" class="form-control" aria-describedby="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
"  required>
                     </div>
                     <div class="mb-3">
                       <label for="username" class="form-label">User Course</label>
                       <input type="text" name="course" id="course" class="form-control" aria-describedby="course" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['course'];?>
"   required>
                     </div>
                     <div class="mb-3">
                       <label for="username" class="form-label">User Collegee</label>
                       <input type="text" name="college" id="college" class="form-control" aria-describedby="collegeHelp" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['college'];?>
"   required>
                     </div>
                     <button type="submit" class="btn btn-primary" name="edit" value="Edit" >UPDATE</button>
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
