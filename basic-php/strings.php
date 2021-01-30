<?php


#substr
#returns a portion of a string from start
$output = substr('Hello', 1);
echo $output;
echo '<br>';
#returns a portion of a string in between
$output = substr('Hello', 1, 3);
echo $output;
echo '<br>';
#returns a portion of a string from back
$output = substr('Hello', -2);
echo $output;
echo '<br>';

#strlen
$output = strlen('Hello');
echo $output;
echo '<br>';

#strpos
$output = strpos('Hello', 'o');
echo $output;
echo '<br>';

#strrpos, finds the position of the last occurence
$output1 = strpos('Hello', 'l');
echo $output1;
echo '<br>';
$output1 = strrpos('Hello', 'l');
echo $output1;
echo '<br>';


#trim - trim while space
$text = 'Hello World               ';
var_dump($text);
echo '<br>';
$trimmed = trim($text);              
var_dump($trimmed);
echo '<br>';

#strtoupper
$output = strtoupper('Hello World');
echo $output;
echo '<br>';

#strtolower
$output = strtolower('Hello World');
echo $output;
echo '<br>';

#ucwords
$output = ucwords('hello world');
echo $output;
echo '<br>';

#str_replace
$text = 'Hello World ';
$output = str_replace('World', 'All of You', $text);
echo $output;
echo '<br>';

#is_string
$val = 'Hello';
$output = is_string($val); # returns 1
echo $output;
echo '<br>';

$val = 142;
$output = is_string($val); #returns nothing !!
echo $output;
echo '<br>';

$values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

foreach($values as $value ) {
    if (is_string($value)) {
        echo "{$value} is string<br>";
    } else {
        echo "{$value} is NOT a string<br>";
    }
}

#gzcompress
$string = "– Ekofascism, mullrade åklagare Henrik Olin och trampade igång sin berättelse om ett politiskt attentat med ideologiska motiv.

FBI och underrättelsetjänsten i Luxemburg dök upp som udda inslag bland de slags bevis som normalt staplas på varandra då mordbrand ska avhandlas.

Men så är det också ett mycket ovanligt fall som Nacka tingsrätt i dag satte tänderna i.

Om vi ska tro åklagaren handlar det om en ny form av högextremism som utöver de vanliga drömmarna om en västvärld där endast vita människor ges utrymme även med våld vill påverka miljöpolitik och djurhållning.

På åhörarplatserna satt några av de vanliga kriminalmurvlarna från de stora redaktionerna och en ambitiös ung ledarskribent från en blaska i Blekinge.";
echo '<br>';
echo strlen($string);
echo '<br>';

$compressed = gzcompress($string);
echo $compressed;
echo '<br>';
echo strlen($compressed);
echo '<br>';

$original = gzuncompress($compressed);
echo $original;
echo '<br>';
echo '<br>';
echo strlen($original);
echo '<br>';
?>