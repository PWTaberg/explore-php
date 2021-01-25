<?php 
    if (isset($_POST['submit'])){
        #Start session
        session_start(); 

        $_SESSION['name'] = htmlentities($_POST['name']);
        $_SESSION['email'] = htmlentities($_POST['email']);


        #redirect to page2
        header('Location: page2.php');

    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" placeolder="Enter name">
        <br>
        <input type="text" name="email" placeolder="Enter email">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>