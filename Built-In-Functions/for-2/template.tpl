<ul>
{for $foo=$start to $to}
    <li>{$foo}</li>
      {forelse}
   no iteration
{/for}
</ul>