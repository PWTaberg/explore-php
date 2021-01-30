<h1>
<?php
// Comment
# Also comment
/*
Multi line comment
*/

#variables
/*
    - prefox $
    - start with a letter or _ underscore
    - only letters, numbers, and undersores
    - case sensitive

*/
#data types
/*
    String
    Integer
    Float
    Boolean
    Array
    Object
    NULL
    Resource
    
*/
echo 'Hello World';

$string1 = ' Howdy';
$string2 = ' my friend';
$greeting1 = $string1 . ' '. $string2. '!';
$greeting2 = "$string1 $string2";
$num1 = 122 + 10;
$num2 = 10;
$sum = $num1 + $num2;
$float1 = 4.23;
$bool1 = true;

$string3 = 'They\'re Here';
$string4 = "They're Here";

define('GREETING', 'Hello this is a constant'); 



echo $greeting1;
echo $string3;
echo $string4;
echo GREETING;


?>
</h1>
