<ul>
   {foreach $Mydata as $data}
     {foreach $data as $key=>$value}
      <li>{$key} : {$value}</li>
     {/foreach}
   {/foreach}
</ul>