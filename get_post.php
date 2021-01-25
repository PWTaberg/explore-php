<?php 

    if (isset($_GET['name'])){
        //print_r($_GET);
        //prevent harmful scripts from running
        $name = htmlentities($_GET['name']);
        echo $name;
      //  $email = htmlentities($_GET['email']);
      //  echo $email;
    }
    /*
    if (isset($_POST['name'])){
        //prevent harmful scripts from running
        print_r($_GET);
        prevent harmful scripts from running
        $name = htmlentities($_POST['name']);
        echo $name;
        $email = htmlentities($_POST['email']);
        echo $email;
    }
    */
/*
    // Not used very much stick with explicit GET/POST
    if (isset($_REQUEST['name'])){
        print_r($_REQUEST);
        //prevent harmful scripts from running
        $name = htmlentities($_REQUEST['name']);
        echo $name;
        $email = htmlentities($_REQUEST['email']);
        echo $email;
    };

    */
    // Query string
    /*
    if (isset($_REQUEST['name'])){
        echo $_SERVER['QUERY_STRING'];
        //$query = $_SERVER['QUERY_STRING'];
        //echo $query;
    };
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="get_post.php">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
        <a href="get_post.php?name=Bongo">Bongo</a>
        </li>
    </ul>
    <h1><?php echo "{$name}'s Profile "?> </h1>
</body>
</html>