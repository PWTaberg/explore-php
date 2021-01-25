<?php

#loops

/*
 for
 while
 do while
 foreach

*/


# for

for ($i = 0; $i<5; $i++) {
    echo 'for '.$i;
    echo '<br>';
};
$i=0;
while ($i < 10) {
    echo 'while '. $i++;
    echo '<br>';
};

do {
    echo 'do while '. $i--;
    echo '<br>';
} while ($i > 0);


$people = ['Brad', 'Peter', 'Anton'];

foreach($people as $person) {
    echo $person;
    echo '<br>';
}

$people2 = ['Brad'=>'brad@gmail.com', 'Peter'=>'pw@gmail.com', 'Anton' => 'aw@mail.com'];

foreach($people2 as $person => $email) {
    echo $person .' '.$email;
    echo '<br>';
}
?>