<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1 tabindex="0">varibale of Smarty PHP</h1>
     string: {$str}

     {*This is an Example of Array of Smarty PHP*}
     {foreach $names as $name}
       <!-- {strip}  -->
       <li>{$name}</li> 
       <!-- {/strip} -->
     {/foreach}  

     {*This is an Associative Array Example of smarty Php*}

     {foreach $us as $user}
     {strip}
      {$user}
      {$user}
     {/strip} 
     {/foreach}

   <br/><br/>
     

     {*Multidimaensional Array*}
      <table>
      {foreach $datas as $data}
      {strip}
         <tr bgcolor="{cycle values="#aaaaaa, #bbbbbb"}">
            <td>{$data.name}</td>
            <td>{$data.post}</td>
         </tr>
      {/strip}
      {/foreach}
      </table>


      
</body>
</html>