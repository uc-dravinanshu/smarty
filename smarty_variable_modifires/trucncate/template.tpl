
{$articleTitle} <br>
{$articleTitle|truncate} <br/>
{$articleTitle|truncate:4} <br/> {* here dot's is count*}

{$articleTitle|truncate:30:""} <br/>
{$articleTitle|truncate:30:"---"} <br/>
{$articleTitle|truncate:30:"":true} <br/>
{$articleTitle|truncate:30:"...":true} <br/>
{$articleTitle|truncate:30:'..':true:true} <br/>

