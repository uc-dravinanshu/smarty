{* define the function *}

{function name=menu level=0}
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

{*Create an Array for examples*}
{$menu = ['first','second','third'=>['third-1','third-2','third-3'=>['third-1-1','third-1-2','third-1-3']],'fourth']}

{*Run the array through the function*}
{menu data=$menu}

