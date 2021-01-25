<?php

    echo "working with files<br>";
    $path = '/dir1/myfile.php';
    $file1 = 'file1.txt';
    $file2 = 'file2.txt';
    $file3 = 'file3.txt';


/*
    // Return file name
    echo basename($path);
    echo "<br>";

    // return filename without 
    echo basename($path, '.php');
    echo "<br>";

    // return the dir name from path
    echo dirname($path);
    echo "<br>";

    // check if file exists, not for folders
    echo file_exists($file1);
    echo "<br>";
    echo file_exists('test');
    echo "<br>";

    // check abs path
    echo realpath($file3);
    echo "<br>";

    // Check if file, works for folders
    echo is_file($file1);
    echo "<br>";
    echo is_file($file2);
    echo "<br>";
    echo is_file('test');
    echo "<br>";

    // File writable
    echo is_writable($file1);
    echo "<br>";

    // File writable
    echo is_readable($file1);
    echo "<br>"; 

    // Get file size
    echo filesize($file1);
    echo "<br>";

    // Create Folder
    #mkdir('testing');
    echo "<br>";

     // Delete Folder - if empty
    #rmdir('testing');
    echo "<br>";

    // Copy a file to new
   // echo copy('file1.txt', 'file3.text');

    // Rename file - funkade inte
    #rename('file2.txt', 'myfile.txt');

    // Delete file
   # unlink('file2.txt');


// write from file to string
//echo file_get_contents($file1);

// write string to file
#echo file_put_contents($file1, 'Abba Dabba Do');

// Append:: Get data from file, append info, write back
$current = file_get_contents($file1);
$current .= " Bjorn again";
echo $current;
file_put_contents($file1, $current);


// Open file for reading
$handle = fopen($file1, 'r');
$data = fread($handle, filesize($file1));
#close after use
fclose($handle);
echo $data;


// Open file for writing
#get handle
$handle = fopen($file1, 'w');
$txt = "John Doe";
#open for write
fwrite($handle, $txt);
#close after use
fclose($handle);
*/

// Open file for writing
#get handle
$handle = fopen($file1, 'w');
$txt = "John Doe 2\n";
#open for write
fwrite($handle, $txt);
$txt = "Jonny B Good\n";
fwrite($handle, $txt);
fclose($handle);

?>