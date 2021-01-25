<?php
    echo "Hello";

    #check that 'submit' variable is included in POST
    if(isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);
        echo "cookie";

        # create a cookie for one hour
        setcookie('username', $username, time()+3600);

        header('location: page2.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="username" placeholde="Enter username">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>