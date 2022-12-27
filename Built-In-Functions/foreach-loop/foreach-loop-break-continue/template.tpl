  {$data = [1,2,3,4,5]}
  {foreach $data as $value}
    {if $value == 3}
      {* abort iterating the array *}
      {break}
    {/if}
    {$value}
  {/foreach}
  {*
    prints: 1 2
  *}
  <hr/><br/>
    {$datas = [1,2,3,4,5]}
  {foreach $datas as $value}
    {if $value == 3}
      {* skip this iteration *}
      {continue}
    {/if}
    {$value}
  {/foreach}
  {*
    prints: 1 2 4 5
  *}