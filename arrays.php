<?php
#Arrays
/*
    - indexed
    - associative
    - multi-dimemsional
*/

#indexed arrays

$people = array('Inger', 'Hanna', 'Anton', 'Peter');
$ids = array(23,12,44);
$cars = ['Toyota', 'Tesla', 'Ford'];
$cars[3]="Volvo";
// append 
$cars[]="Trabant";

// length
echo count($cars);

// print array
print_r($cars);

// print array element(s) and its types
// can be used for any variable
var_dump($cars);

echo $people[1];
echo $ids[1];
echo $cars[4];

// associated arrays


// Key and value

$people2 = ['Brad' => 37, 'Anton' => 26, 'Hanna'=> 20];
$ids2 = Array('Brad' => 123, 'Anton' => 212, 'Hanna'=> 220);

echo $people2['Anton'];
echo $ids2['Anton'];

print_r($ids2);


// Multi-dimensional

$cars_22 = array(
    array('Honda', 20, 10),
    array('Tesla', 10, 40),
    array('Volvo', 5, 10),
);

echo $cars_22[1][0];

#print_r($cars_22);


?>