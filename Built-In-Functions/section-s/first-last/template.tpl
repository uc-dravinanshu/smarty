
{section name=ct start=0 loop=$items step=2}
  {if $smarty.section.ct.first}
    <table>
    <tr>
       <th>id</th>
       <th>customer</th>
    </tr>
  {/if}

  <tr>
    {$items[ct][start].id}
  </tr>
<!-- 
  <tr>
    <td>{$customers[ct][start].id}</td>
    <td>{$customers[ct][start].name}</td>
  </tr>

  {if $smarty.section.ct.last}
    <tr><td></td><td>{$smarty.section.ct.total} customers</td></tr>
    </table>
  {/if} -->
{/section}