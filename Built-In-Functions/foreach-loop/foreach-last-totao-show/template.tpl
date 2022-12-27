{* Add horizontal rule at end of list *}
{foreach $items as $item}
  <a href="#{$item.id}">{$item.name}</a><br/>
  {if $item@last}<hr>{else},{/if}
{foreachelse}
  ... no items to loop ...
{/foreach}
