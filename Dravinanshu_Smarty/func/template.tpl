{* define the function *}
{function menu level=0}          {* short-hand *}
  <ul class="level{$level}">
  {foreach $data as $entry}
    {if is_array($entry)}
      <li>{$entry@key}</li>
      {menu data=$entry level=$level+1}
    {else}
      <li>{$entry}</li>
    {/if}
  {/foreach}
  </ul>
{/function}



{* create an array to demonstrate *}
{$menu = ['item1','item2','item3' => ['item3-1','item3-2','item3-3' =>
['item3-3-1','item3-3-2']],'item4']}

{* run the array through the function *}
{menu data=$menu}