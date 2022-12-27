<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the Template</h1>
    <ul>
        {foreach $MyColor as $color}
           <li>{$color}</li>
        {/foreach}
    </ul>
    
</body>
</html>