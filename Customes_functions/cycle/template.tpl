<table>
  {section name=rows loop=$data}
<tr class="{cycle values="odd,even"}">
   <td>{$data[rows]}</td>
</tr>
{/section}
</table>