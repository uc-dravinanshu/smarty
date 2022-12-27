
{$time=$smarty.now|date_format:'%Y-%m-%d %H:%M:%S'}

{* start and end year can be relative to current year *}
{html_select_date prefix='StartDate' time=$time start_year='-100'
   end_year='+1' display_days=true}

 <br/><br/><br/><br/><br/>  
{html_select_date}

{$smarty.now|date_format:'%H:%M:%S'} 