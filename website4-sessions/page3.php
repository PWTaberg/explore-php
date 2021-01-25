<?php 
       # session_start();
       session_start(); 

        $name =  isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
        $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not subscribed';

        print_r($_SESSION);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>

<body>
    <h5>Hello <?php echo $name  ?>  <h5>
</body>

</html>