{* $rows[row.index] and $rows[row] are identical in meaning *}
<table>
  <tr>
    <th>index</th><th>id</th>
    <th>index_prev</th><th>prev_id</th>
    <th>index_next</th><th>next_id</th>
  </tr>
{section name=row loop=$rows}
  <tr>
    <td>{$smarty.section.row.index}</td><td>{$rows[row]}</td>
    <td>{$smarty.section.row.index_prev}</td><td>{$rows[row.index_prev]}</td>
    <td>{$smarty.section.row.index_next}</td><td>{$rows[row.index_next]}</td>
  </tr>
{/section}
</table>