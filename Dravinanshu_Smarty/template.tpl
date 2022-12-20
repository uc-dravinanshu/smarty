<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tpl file</title>
</head>
<body>
    <!-- //this file runs bassed on myphp.php file. -->
    <pre>
    <h1 tabindex="0">user Information</h1>
    Name: {$name}
    address: {$address}

    <!-- //commnets way in smarty php -->
    
     {* address: {$address}*}  <!--this is become commnets in smarty way -->
     {* <option value="0">-- none -- </option> *} 
    <!-- Date: {$smarty.now|date_format:"%b %e, %Y"} -->
    
    {* another single line smarty comment  *}
    </pre>
</body>
</html>