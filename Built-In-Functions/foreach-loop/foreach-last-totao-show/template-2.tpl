{* show number of rows at end *}
{foreach $itemas as $item}
  {$item.name}<hr/>
  {if $item@last}
    <div id="total">{$item@total} items</div>
  {/if}
{foreachelse}
 ... no items to loop ...
{/foreach}