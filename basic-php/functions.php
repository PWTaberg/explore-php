<?php

#function

## create func
function simpleFunction() {
    echo 'Hello World <br>';
}

# run func
simpleFunction();



function sayHello($name="a name") {
    echo "Hello  $name <br>";
}

sayHello();
sayHello('Bob');


function  addNumber($num1=0, $num2=0) {
    $sum = $num1 + $num2;
    return $sum;
}


$mySum = addNumber(1,2);
echo "Result is $mySum<br>";

$mySum = addNumber(1);
echo "Result is $mySum<br>";

$mySum = addNumber();
echo "Result is $mySum<br>";

// BY value
$myNum = 10;
function addFive($num) {
    $num += 5;
    echo "In function $num<br>";
}

addFive($myNum);
echo "After function $myNum<br>";

// BY reference
$myNum2 = 10;
function addTen(&$num) {
    $num += 10;
    echo "In function $num<br>";
}

addTen($myNum2);
echo "After function $myNum2<br>";


?>