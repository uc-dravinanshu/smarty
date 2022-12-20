<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <!-- {section name=customer loop=$data}
 no: {$data[customer].no}
 name: {$data[customer].name}
 position: {$data[customer].position}
 Address: {$data[customer].Address}
 Company: {$data[customer].Company}
 {/section} -->

 {section name=customer loop=$data}
   {$data[customer].no}. {$data[customer].name} - {$data[customer].position} - {$data[customer].Address} {$data[customer].Company}<br/>
 {/section}
</body>
</html>