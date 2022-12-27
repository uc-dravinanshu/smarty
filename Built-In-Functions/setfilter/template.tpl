{$foo}
<script>
{setfilter filter1}
  {$foo} 
  {setfilter filter2|mod:true}
    {$bar}
  {/setfilter}
  {$buh}
{/setfilter}
{$blar} 
</script>