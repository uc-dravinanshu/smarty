{* embed some weather text in your template from another web site *}
{fetch file='http://www.myweather.com/68502/'} 
welcome<br/><br/>

{$weather='welcome back'}
{* assign the fetched contents to a template variable *}
{fetch file='http://www.myweather.com/68502/' assign='weather'}
{if $weather ne ''}
  <div id="weather">{$weather}</div>
{/if}





