{section name=customer loop=$contacts}
<p>
  name: {$contacts[customer].name}<br />
  home: {$contacts[customer].home}<br />
  cell: {$contacts[customer].cell}<br />
  e-mail: {$contacts[customer].email}
</p>
{/section}