{section name=ct loop=$custid}
 id: {$custid[ct]} <br/>
{/section}

<br/><br/>

{*  print out all the values of the $custid array reversed *}
{section name=foo loop=$custid step=1}
  {$custid[foo]}<br />
{/section}