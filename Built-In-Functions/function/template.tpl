{* define the function *}
{function name=myfunction}
  <ul>
  {foreach $data as $entry}
    {if is_array($entry)}
      <li>{$entry@key}</li>
      {myfunction data=$entry} {*it is used for show the nested data, use use same key and value*}
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
{myfunction data=$menu}



