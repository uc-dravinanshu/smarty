capitalize: {$someTitle|capitalize} <br/>
uppercase: {$someTitle|upper} <br/>
count_characters: {$someTitle|count_characters} <br/>
count_paragraph: {$someTitle|count_paragraphs} <br/>
count_sentences: {$someTitle|count_sentences:true} <br/>
count_words: {$someTitle|count_words} <br/>
date_format: {$someTitle|date_format}<br/>
default: {$someTitle|default} <br/>
escape: {$articleTitle|escape:'html'} <br/>
escape: {$articleTitle|escape:'htmlall'} <br/>
from_charset: {$someTitle|from_charset} <br/> <br/>

 indent: {$articleTitle|indent} <br/>

 indent: {$articleTitle|indent:10} <br/>

 indent: {$articleTitle|indent:1:"\t"} <br/>

 lower: {$someTitle|lower} <br/>
nl2br: {$someTitle|nl2br} <br/>
{* replace each carriage return, tab and new line with a space *}
regex_replace: {$articleTitle|regex_replace:"/[\r\t\n]/":" "} <br/>

{*replace*}
replace: {$someTitle|replace:'dravinanshu':'Ashu'}</br>
specify: {$someTitle|spacify} <br/>
specify: {$someTitle|spacify:'^^'} <br/>
format_string: {$number} <br/>
format_string: {$number|string_format:"%.2f"} <br/>
format_string: {$number|string_format:"%d"}
 <br/>
