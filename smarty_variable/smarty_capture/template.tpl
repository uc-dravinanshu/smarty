
{capture append="foo"}
  hello
{/capture}

I say just 

{capture append="foo"}
   world
{/capture}

{foreach $foo as $text}
   {$text} 
{/foreach}