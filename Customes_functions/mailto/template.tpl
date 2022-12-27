{mailto address="me@example.com"} <br/><br/>

<a href="mailto:me@example.com" >me@example.com</a>

{*Both above Examples are good*}

<br/><br/>


{mailto address="me@example.com" encode="javascript"}
<script type="text/javascript" language="javascript">
   eval(unescape('%64%6f% ... snipped ...%61%3e%27%29%3b'))
</script>

<br/><br/>

{mailto address="me@example.com" encode="hex"}
<a href="mailto:%6d%65.. snipped..3%6f%6d">&#x6d;&..snipped...#x6f;&#x6d;</a>

<br/><br/>

{mailto address="me@example.com" subject="Hello to you!"}
<a href="mailto:me@example.com?subject=Hello%20to%20you%21" >me@example.com</a>

<br/><br/>

{mailto address="me@example.com" cc="you@example.com,they@example.com"}
<a href="mailto:me@example.com?cc=you@example.com,they@example.com" >me@example.com</a>

<br/><br/>

{mailto address="me@example.com" extra='class="email"'}
<a href="mailto:me@example.com" class="email">me@example.com</a>

