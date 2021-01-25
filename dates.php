<?php
echo date('d'); #day of the month
echo '<br>';
echo date('m'); #the month
echo '<br>';
echo date('Y'); #the year
echo '<br>';
echo date('l'); #the day of the week
echo '<br>';
echo date('Y/m/d'); #the date
echo '<br>';
echo date('Y.m.d'); #the date
echo '<br>';
echo date('m-d-Y'); #the month
echo '<br>';
echo date('h'); #the hour
echo '<br>';
echo date('i'); #the min
echo '<br>';
echo date('s'); #the second
echo '<br>';
echo date('a'); #am / pm
echo '<br>';
echo date('h:i:sa'); #the time pm/am
echo '<br>';
date_default_timezone_set('Europe/Copenhagen');
echo date('h:i:sa'); #the time pm/am
echo '<br>';
$timestamp = mktime(10, 14, 9, 10, 1981);
echo $timestamp;# seconds since jan 1 1970
echo '<br>';
echo date('h:i:sa', $timestamp); #the time pm/am
echo '<br>';
echo date('m/d/Y h:i:sa', $timestamp); #the time pm/am
echo '<br>';
$timestamp2 = strtotime('7:00pm March 22 2020');
echo $timestamp2;
echo '<br>';
echo date('Y.m.d h:i', $timestamp2);
echo '<br>';
$timestamp3 = strtotime('tomorrow');
echo '<br>';
echo date('Y.m.d h:i', $timestamp3);
echo '<br>';
$timestamp4 = strtotime('next Monday');
echo '<br>';
echo date('Y.m.d h:i', $timestamp4);
echo '<br>';
$timestamp5 = strtotime('next Year');
echo '<br>';
echo date('Y.m.d h:i', $timestamp5);
echo '<br>';

# more php.net/manual/en/function.date