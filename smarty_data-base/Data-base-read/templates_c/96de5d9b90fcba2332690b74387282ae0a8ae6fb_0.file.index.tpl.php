<?php
/* Smarty version 4.3.0, created on 2022-12-20 08:30:19
  from 'C:\xampp\htdocs\smarty\Ashu\Data-base-read\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63a1648b36ad83_14235291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96de5d9b90fcba2332690b74387282ae0a8ae6fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Ashu\\Data-base-read\\index.tpl',
      1 => 1671521415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63a1648b36ad83_14235291 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 tabindex="0" class="bg-secondary p-4 text-center text-white mb-3 mt-2">Data Read, Update, Delete</h1>
     <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8">
                <table class="table">
                    <tr>
                        <th tabindex="0" width="20%">Number</th>
                        <th tabindex="0">Name</th>
                        <th tabindex="0">Course</th>
                        <th tabindex="0">College</th>
                        <th colspan="2" tabindex="0">Action</th>
                    </tr>
                    <?php
$__section_ct_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ct_0_total = $__section_ct_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ct'] = new Smarty_Variable(array());
if ($__section_ct_0_total !== 0) {
for ($__section_ct_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] = 0; $__section_ct_0_iteration <= $__section_ct_0_total; $__section_ct_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']++){
?>
                      <tr>
                        <td tabindex="0">
                            <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['no'];?>

                        </td>
                        <td tabindex="0">
                            <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['name'];?>

                        </td>
                        <td tabindex="0">
                            <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['course'];?>

                        </td>
                        <td tabindex="0">
                            <?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['college'];?>

                        </td>
                        <td>
                           <a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['id'];?>
">edit</a> | <a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ct']->value['index'] : null)]['id'];?>
">delete</a> 
                        </td>
                      </tr>
                    <?php
}
}
?>
                </table>
            </div>
            <div class="col-lg-4">
                <img src="" alt=""/>
            </div>
        </div>
     </div>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
