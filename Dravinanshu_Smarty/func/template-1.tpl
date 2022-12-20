<!-- {* function in Smarty PHP *} -->

{function menu hello=0}

 <ul class="hello{$hello}">
   {foreach $data as $entry}
     {if is_array($entry)}
       {*<li>{$entry}</li>*}
       <li>{$entry@key}</li>
        {menu data=$entry hello=$hello+1}
       {else}
       <li>{$entry}</li>
     {/if}
   {/foreach}
 </ul>

{/function}



{*Create an Array for check*}

{$menu = ['item1','item2','item3' => ['item3-1','item3-2','item3-3' =>
['item3-3-1','item3-3-2']],'item4']}

{*Run this $mune through the function*}
{menu data=$menu}

