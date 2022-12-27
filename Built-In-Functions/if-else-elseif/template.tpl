{* eq examples, equals *}
{if $name eq 'Ashu Mishra'}
    Welcome Sir {$name}.
{elseif $name eq 'Wilma'}
    Welcome Ma'am {$name}.
{else}
    Welcome, whatever you are {$name}.
{/if}

<br/><br/>


{* eq or examples *} {*$name == 'Fred' || $name == 'Wilma' we use this logic also*}

{if $name eq 'Ashu Mishra' or $name eq 'Abhishek Mishra'}
  welcome Mr. {$name}
  {else}
  welcome but {$name} is not match.
{/if}

<br/>


{* parenthesis are allowd in smarty php *}

{if ( $amount lt 0 or $amount gt 1000 )}
  welcome  your {$amount} 
{/if}

<br/>
{* divisiable four 4 *}
{$var = 100}
{if $var is div by 4}
   welcome {$var}
{/if}


<br/>
<br/>

{*test if var is even, grouped by two. i.e., 0=even, 1=even, 2=odd, 3=odd, 4=even, 5=even, etc.*}
{if $var is even by 2}
   even number {$var}
{/if}

{* 0=even, 1=even, 2=even, 3=odd, 4=odd, 5=odd, etc. *}
{if $var is even by 3}
   odd number {$var}
{/if}

