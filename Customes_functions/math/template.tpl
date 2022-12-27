   {$height=4} 
   {$width=5}
   {math equation="x + y" x=$height y=$width}

   <br/><br/>

   {* you can use parenthesis *}

   {math equation="(( x + y ) / z )" x=2 y=10 z=2}

   <br/><br/>

   
   {* you can supply a format parameter in sprintf format *}

   {math equation="x + y" x=4.4444 y=5.0000 format="%.2f"}