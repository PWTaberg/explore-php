<?php

#Conditions

/*
    ==
    ===
    <
    >
    <=
    >=
    !=
    !==
*/


$num = 5;
if ($num == 5){
    echo "It is 5<br>";

}

$num1 = '5';
if ($num1 == 5){
    echo "It is == 5<br>";
    
}else {
    echo "NOT == <br>";
}

if ($num1 === 5){
    echo "It is === 5<br>";
    
} else {
    echo "NOT ===<br>";
}

# Nested Ifs

#logical operators {AND or &&}   {OR or ||}


#switch 
$favColor = 'blue';

switch ($favColor) {
    case 'red':
        echo "It is red <br>";
        break;
    case 'yellow':
        echo "It is yellow <br>";
        break;
    case 'green':
        echo "It is green <br>";
        break;
    default:
        echo "It is some other color <br>";
    
    }



?>