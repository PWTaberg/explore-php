<?php

    echo "working with files-2<br>";
    $path = '/dir1/myfile.php';
    $file1 = 'file1.txt';
    $file2 = 'file2.txt';
    $file3 = 'file3.txt';



    // copy file
    echo copy('file3.txt', 'file4.txt');

?>