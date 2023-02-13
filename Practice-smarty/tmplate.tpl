<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {*counter*}

    {counter step=1 skip=1}
    <p>{counter}</p>
    <p>{counter}</p>
    <p>{counter}</p>
    <p>{counter}</p>

    <br/><br/>
    
    <table>   
        {section name=row loop=$data}
            <tr class="{cycle values='{even,odd}'}">
              <th>{$data[row]}</th>
            </tr>
        {/section}
    </table>

    <br/><br/>
    {eval var=$string}

    <br/><br/>
    {html_table loop=$ta_table cols=4 rows=4 table_attr='border="7"' tr_attr=$tr td_attr=$td}

    <br/><br/>
    {html_options name='id' options=$opt selected=$opt_select separator='<br/>'}

    <br/><br/>
    {html_checkboxes name='id' options=$check_box selected=$cust_id separator='<br/>'}
   
    <br/><br/>
    {html_radios name='id' options=$choose_radio selected=$radio_select separator='<br/>'}

    <br/><br/>
    {html_select_date prefix='StartDate' start_year='-50'
    end_year='+1'}

    <br/><br/>
    {html_select_time use_24_hours=true display_hours=true display_minutes=true display_meridian=true}


    <br/><br/>
    {html_image file='../images/images.jpeg' alt='This is a rose flavour' height='200' width='500'}


    <br/><br/>
    {mailto address='dravinanshu.mishra@ucertify.com' text='send me some mail'}


    <br/><br/>
    {$height=4}
    {$width=5}
    {math equation="x + y" x=$height y=$width}

    <br/><br/>
    
   {textformat wrap=40 indent=4 indent_first=4 style="email"}
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, voluptatibus! Ullam esse ipsam repudiandae incidunt mollitia saepe, exercitationem, tenetur ut iure error officiis corporis cum minus perspiciatis quod quam commodi eveniet. Quas autem vero hic explicabo, soluta voluptates facere praesentium eum delectus cumque assumenda vel unde ipsum quia voluptatibus perferendis quaerat veritatis officia facilis in sequi repellat quibusdam aliquam? Soluta magni commodi corporis ratione hic, consequuntur nihil consequatur, veritatis deserunt nostrum aliquid animi quis pariatur ut error natus nulla ad! Praesentium sapiente libero sint velit vero nesciunt aut eius, modi repudiandae omnis deserunt voluptatum dicta, qui quos, ipsa ea quibusdam.
   {/textformat}

</body>
</html>