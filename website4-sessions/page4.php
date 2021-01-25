<?php 
         # session_start();
        session_start(); 

        #unset global variable
        unset($_SESSION['name']);

        #destroy session
        session_destroy();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>

<body>
    <h5>Hello I just unset name  !!<h5>
    <h5>Hello I just destroyed the session  !!<h5>
</body>

</html>