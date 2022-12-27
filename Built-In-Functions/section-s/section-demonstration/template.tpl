{section name=customer loop=$custid}
<p>
  id: {$custid[customer]}<br />
  name: {$name[customer]}<br />
  address: {$address[customer]}
</p>
{/section}