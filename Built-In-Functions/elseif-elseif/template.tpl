{$name="Dravinanshu Mishra"}

{if isset($name) && $name == 'anshu Mishra'}
     {* do something *}
     welcome {$name}
{elseif $name == {$foo.name}}
    {* do something *}
    ok same {$name}
    {else}
     NOT SAME
{/if}
<br/>
{if is_array($foo) && count($foo) > 0}
    {* do a foreach loop *}
    {foreach $foo as $data}
     {$data.name} <br/>
    {/foreach}
{/if}