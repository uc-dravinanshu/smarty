
<table>
    {foreach $items as $i}
      {if $i@first}
      {$i@first} {*it returns the firts index number of a the array loop*}
        <tr>
          <th>key</td>
          <th>name</td>
        </tr>
      {/if}
      <tr>
        <td>{$i@key}</td>
        <td>{$i.name}</td>
      </tr>
    {/foreach}
    </table>
    