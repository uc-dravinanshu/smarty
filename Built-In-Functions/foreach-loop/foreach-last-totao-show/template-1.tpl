<ul>
{foreach $myArray as $name}
    <li>{$name}</li>
{/foreach}
</ul>
{if $name@show} do something here if the array contained data {/if}