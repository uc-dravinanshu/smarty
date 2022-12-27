{assign var="name" value="dravinanshu mishra" scope="root"}

this is a {$name}

/{*assign with math in *}
{$running_total = 10}
{assign var=running_total value=$running_total+$some_array['row'].some_value}

{$running_total}
<br/><br/>
