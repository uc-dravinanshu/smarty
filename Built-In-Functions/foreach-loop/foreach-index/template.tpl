
{* output empty row on the 4th iteration (when index is 3) *}
<table>
{foreach $items as $i}
  {if $i@index eq 3}
     {* put empty table row *}
     <tr><td>{$i@index} &nbsp;</td></tr>
  {/if}
  <tr><td>{$i.name}</td></tr>
{/foreach}
</table
