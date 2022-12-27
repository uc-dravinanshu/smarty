
{$articleTitle} <br/>
{$articleTitle|strip} <br/>
{$articleTitle|strip:'&nbsp; &nbsp; &nbsp;'} <br/>

<br/><br/>
{$article} <br>
{$article|strip_tags}  <br/>{* same as {$articleTitle|strip_tags:true} *}
{$article|strip_tags:false} <br/>
<br/><br/>
{$articles}

{$articles|wordwrap:30} <br/>

{$articles|wordwrap:20} <br/>

{$articles|wordwrap:30:"<br />\n"} <br/>

{$articles|wordwrap:26:"\n":true}
<br/><br/><br/>

