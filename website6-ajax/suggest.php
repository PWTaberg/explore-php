<?php

// For the DB
$people[] = "Inger";
$people[] = "Anton";
$people[] = "Hanna";
$people[] = "Harald";
$people[] = "Alvaro";
$people[] = "Inga";
$people[] = "Antonio";
$people[] = "Hugo";
$people[] = "Anette";
$people[] = "Alvar";

// get query

$q = $_REQUEST['q'];

$suggestion = "";

if ($q !== "") {
   $g = strtolower($q);
   $len = strlen($q);

   foreach($people as $person) {
       if (stristr($q, substr($person, 0, $len ))) {
            if ($suggestion === "") {
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
       }
   }
}

echo $suggestion === "" ? "no suggestion" : $suggestion;
?>