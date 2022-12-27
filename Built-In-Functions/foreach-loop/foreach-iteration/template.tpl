 {foreach $myNames as $key => $n}
   {if $key is even by 3}
     <span style="color: red">{$n.name}</span><br/>
   {else}
     <span style="color: green">{$n.location}</span> <br/>
   {/if}

   <!-- {$key} -->
 {/foreach}

