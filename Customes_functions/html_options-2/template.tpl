<select name="customer_id" size="{$cust_names|@count}">
   {html_options values=$cust_ids output=$cust_names selected=$customer_id}
</select>