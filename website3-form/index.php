<?php 

// Message vars

$msg = "";
$msgClass = '';


// Check for Submit
if ( filter_has_var(INPUT_POST, 'submit')) {
    // Get Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);


    // Check Required Fields
    if (!empty($email) && !empty($name) && !empty($message)) {
        // Passed
        // Check Email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            // Failed
            $msg = "Please use a valid email";
            $msgClass = "alert-danger";

        }else {
            // Passed
            $toEmail = 'pwelliver@yahoo.com';
            $subject = 'Contact Request From '. $name;
            $body = 
            '<h2>Contact Request</h2>
             <h4>Name</h4><p>'. $name. ' </p>
              <h4>Email</h4><p>'. $email. ' </p>
              <h4>Message</h4><p>'. $message. ' </p>';

            // Email headers
            $headers = "MIME-Version: 1.0"."\r\n";
            $headers .= "Content-Type: text/html;charset=UTF-8". "\r\n";

            // Additional Headers
            $headers .= "From: " .$name. "<".$email.">". "\r\n";

            echo "Send email";
            echo "To: ". $toEmail;
            echo "Subject: ". $subject;
            echo "Body: " .$body;
            echo "Headers" .$headers;

          /*
            if (mail($toEmail, $subject, $body, $headers) ) {
                $msg = "Your Email has been sent";
                $msgClass = "alert-success";  

                $name = "";
                $email = "";
                $message = "";
            } else {
                $msg = "Your Email could not be sent";
                $msgClass = "alert-danger";  
                $name = "";
                $email = "";
                $message = "";
            }
*/
        }

    } else {
      //Failed
      $msg = "Please fill in all fields";
      $msgClass = "alert-danger";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./bootstrap.min.css">

</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="ndex.php">My Website</a>
        </div>
    </nav>

    <div class="container">

        <?php if ($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?> </div>
        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" class="form-control" value=<?php echo isset($_POST['message']) ? $message : ''; ?>>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">
                Submit
            </button>
        </form>


    </div>


</body>

</html>