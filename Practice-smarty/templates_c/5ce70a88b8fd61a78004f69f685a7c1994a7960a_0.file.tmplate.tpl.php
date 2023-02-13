<?php
/* Smarty version 4.3.0, created on 2023-02-13 07:52:34
  from 'C:\xampp\htdocs\smarty\Practice-smarty\tmplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63e9de324331e4_12122526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ce70a88b8fd61a78004f69f685a7c1994a7960a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\Practice-smarty\\tmplate.tpl',
      1 => 1676271151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63e9de324331e4_12122526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_table.php','function'=>'smarty_function_html_table',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),4=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),5=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_radios.php','function'=>'smarty_function_html_radios',),6=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_select_date.php','function'=>'smarty_function_html_select_date',),7=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_select_time.php','function'=>'smarty_function_html_select_time',),8=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.html_image.php','function'=>'smarty_function_html_image',),9=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),10=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),11=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\block.textformat.php','function'=>'smarty_block_textformat',),));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php echo smarty_function_counter(array('step'=>1,'skip'=>1),$_smarty_tpl);?>

    <p><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>
    <p><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>
    <p><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>
    <p><?php echo smarty_function_counter(array(),$_smarty_tpl);?>
</p>

    <br/><br/>
    
    <table>   
        <?php
$__section_row_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_row_0_total = $__section_row_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new Smarty_Variable(array());
if ($__section_row_0_total !== 0) {
for ($__section_row_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_0_iteration <= $__section_row_0_total; $__section_row_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
?>
            <tr class="<?php echo smarty_function_cycle(array('values'=>'{even,odd}'),$_smarty_tpl);?>
">
              <th><?php echo $_smarty_tpl->tpl_vars['data']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] : null)];?>
</th>
            </tr>
        <?php
}
}
?>
    </table>

    <br/><br/>
    <?php $_template = new Smarty_Internal_Template('eval:'.$_smarty_tpl->tpl_vars['string']->value, $_smarty_tpl->smarty, $_smarty_tpl);echo $_template->fetch(); ?>

    <br/><br/>
    <?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['ta_table']->value,'cols'=>4,'rows'=>4,'table_attr'=>'border="7"','tr_attr'=>$_smarty_tpl->tpl_vars['tr']->value,'td_attr'=>$_smarty_tpl->tpl_vars['td']->value),$_smarty_tpl);?>


    <br/><br/>
    <?php echo smarty_function_html_options(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['opt']->value,'selected'=>$_smarty_tpl->tpl_vars['opt_select']->value,'separator'=>'<br/>'),$_smarty_tpl);?>


    <br/><br/>
    <?php echo smarty_function_html_checkboxes(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['check_box']->value,'selected'=>$_smarty_tpl->tpl_vars['cust_id']->value,'separator'=>'<br/>'),$_smarty_tpl);?>

   
    <br/><br/>
    <?php echo smarty_function_html_radios(array('name'=>'id','options'=>$_smarty_tpl->tpl_vars['choose_radio']->value,'selected'=>$_smarty_tpl->tpl_vars['radio_select']->value,'separator'=>'<br/>'),$_smarty_tpl);?>


    <br/><br/>
    <?php echo smarty_function_html_select_date(array('prefix'=>'StartDate','start_year'=>'-50','end_year'=>'+1'),$_smarty_tpl);?>


    <br/><br/>
    <?php echo smarty_function_html_select_time(array('use_24_hours'=>true,'display_hours'=>true,'display_minutes'=>true,'display_meridian'=>true),$_smarty_tpl);?>



    <br/><br/>
    <?php echo smarty_function_html_image(array('file'=>'../images/images.jpeg','alt'=>'This is a rose flavour','height'=>'200','width'=>'500'),$_smarty_tpl);?>



    <br/><br/>
    <?php echo smarty_function_mailto(array('address'=>'dravinanshu.mishra@ucertify.com','text'=>'send me some mail'),$_smarty_tpl);?>



    <br/><br/>
    <?php $_smarty_tpl->_assignInScope('height', 4);?>
    <?php $_smarty_tpl->_assignInScope('width', 5);?>
    <?php echo smarty_function_math(array('equation'=>"x + y",'x'=>$_smarty_tpl->tpl_vars['height']->value,'y'=>$_smarty_tpl->tpl_vars['width']->value),$_smarty_tpl);?>


    <br/><br/>
    
   <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textformat', array('wrap'=>40,'indent'=>4,'indent_first'=>4,'style'=>"email"));
$_block_repeat=true;
echo smarty_block_textformat(array('wrap'=>40,'indent'=>4,'indent_first'=>4,'style'=>"email"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, voluptatibus! Ullam esse ipsam repudiandae incidunt mollitia saepe, exercitationem, tenetur ut iure error officiis corporis cum minus perspiciatis quod quam commodi eveniet. Quas autem vero hic explicabo, soluta voluptates facere praesentium eum delectus cumque assumenda vel unde ipsum quia voluptatibus perferendis quaerat veritatis officia facilis in sequi repellat quibusdam aliquam? Soluta magni commodi corporis ratione hic, consequuntur nihil consequatur, veritatis deserunt nostrum aliquid animi quis pariatur ut error natus nulla ad! Praesentium sapiente libero sint velit vero nesciunt aut eius, modi repudiandae omnis deserunt voluptatum dicta, qui quos, ipsa ea quibusdam.
   <?php $_block_repeat=false;
echo smarty_block_textformat(array('wrap'=>40,'indent'=>4,'indent_first'=>4,'style'=>"email"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

</body>
</html><?php }
}
