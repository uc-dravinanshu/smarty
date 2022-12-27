<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome </h1>
    <script>
        // the following braces are ignored by Smarty
        // since they are surrounded by whitespace
        function myFoo() {
          alert('Foo!');
        }
        myFoo();
        // this one will need literal escapement
        {literal}
          function myBar() {
            alert('Bar!');
           }
         mybar();

        {/literal}
  
     </script>
</body>
</html>