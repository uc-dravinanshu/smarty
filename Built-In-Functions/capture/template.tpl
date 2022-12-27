
<!-- {capture append="foo"}hello{/capture}
I say just 
{capture append="foo"}world{/capture}
{foreach $foo as $text}{$text} {/foreach} -->

{$my_server_name="uCertify"} 
{$my_server_addr="120,Prayagraj"}
{$my_ip=12467}

{capture name=some_content assign=popText}
The server is {$my_server_name|upper} at <br/> {$my_server_addr}<br>
Your ip is {$my_ip}.
{/capture}

<a href="#">{$popText}</a>