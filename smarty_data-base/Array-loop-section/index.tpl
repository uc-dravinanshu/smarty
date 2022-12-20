<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {section name=ct loop=$data}
       {$data[ct].No}. {$data[ct].Name} - {$data[ct].Post} - {$data[ct].Company} - 

       {section name=ct2 loop=$data[ct].Working}
         {$data[ct].Working[ct2].Working}
       {/section}
       <br/>
    {/section}
</body>
</html>