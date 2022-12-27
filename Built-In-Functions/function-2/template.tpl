{*function creation*}

{function name=MyFunction}
  <ul>
    {foreach $data as $entry}
     {if is_array($entry)}
         <li>{$entry@key}</li>
         {MyFunction data=$entry} {*for us enested use same $data and same as $entry*}
       {else}
         <li>{$entry}</li>
     {/if}
    {/foreach}
  </ul>
{/function}

<!-- {* create an array to demonstrate *}
{$arr = ['item1','item2','item3' => ['item3-1','item3-2','item3-3' =>
['item3-3-1','item3-3-2']],'item4']} -->

{* run the array through the function *}
{MyFunction data=$data_array} {*here use same key data and array name*}