{* without assigning arraya indexed array*}

{section name=ct loop=$data_array step=1}
  id: {$data_array[ct]} <br/>
{/section}

{*this section loop starting with 10, 20 tk end step 2*}
{section name=foo start=10 loop=20 step=2}
  {$smarty.section.foo.index}
{/section}

<br/><br/>
{*This section loop starting with, 21 and 6 loop chalega and decrement 2-2 pr*}
{section name=bar loop=21 max=6 step=-2}
  {$smarty.section.bar.index}
{/section}