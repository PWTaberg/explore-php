<?php

    /* 
    // Check for POST data

    if (filter_has_var(INPUT_POST, 'data')) {
        echo "data found <br>";
    } else {
        echo "data NOT found <br>";
    }
    */

    /* 
    // Check if Input GET data is found

    if (filter_has_var(INPUT_GET, 'data')) {
        echo "data found <br>";
    } else {
        echo "data NOT found <br>";
    }
    */

/*  
    //Validation of Email

    # validation of email
    if (filter_has_var(INPUT_POST, 'data')) {
        echo "data found <br>";
        if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
            echo "email is valid <br>";
        } else {
            echo "email is NOT valid <br>";
        }
    } else {
        echo "data NOT found <br>";
    }
*/
/*
    //validation of Email and sanitizing

     # validation of email
     if (filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];
        // Remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo "After sanitize: $email <br>";

        if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
            echo "email is valid <br>";
        } else {
            echo "email is NOT valid <br>";
        }
    } else {
        echo "data NOT found <br>";
    }

*/
    # validation of email correct version
    //validation of Email and sanitizing - BETTER WAY

    # get input
    if (filter_has_var(INPUT_POST, 'data')) {
        $email = $_POST['data'];
        // Remove illegal chars
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo "After sanitize: $email <br>";
        // test the cleaned email is vali format
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "email is valid <br>";
        } else {
            echo "email is NOT valid <br>";
        }
  
    } else {
            echo "data NOT found <br>";
    }

// VALIDATION FILTERS

#FILTER_VAIDATE_BOOLEAN
#FILTER_VAIDATE_EMAI
#FILTER_VAIDATE_FLOAT
#FILTER_VAIDATE_INT
#FILTER_VAIDATE_IP
#FILTER_VAIDATE_REGEXP
#FILTER_VAIDATE_URL

// SANITAZING FILTERS

#FILTER_SANITIZE_EMAIL
#FILTER_SANITIZE_ENCODED
#FILTER_SANITIZE_NUMBER_FLOAT
#FILTER_SANITIZE_NUMBER_INT
#FILTER_SANITIZE_SPECIAL_CHARS
#FILTER_SANITIZE_STRING
#FILTER_SANITIZE_URL

/*

// Integer validation

$var = 23;      #is a number
$var = '23';    #is a number
$var = 'K23';   #is NOT a number

if (filter_var($var, FILTER_VALIDATE_INT)) {
    echo "$var is a number<br>";
} else {
    echo "$var is NOT a number<br>";
}
*/
/*

// Integer sanitazion

$var  = '1234gt12ii7l9';
var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
*/

/*

// Special chars sanitazion - removing scripts

echo "insert alert <br>";
$var  = '<script>alert(123)</script>';
//echo $var; # would have caused a script to run
echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
//var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
*/

// validating a form with an array of filters
/*
$filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" =>array(
                "min_range" => 2,
                "max_range" => 100
            )
        )
    );

    print_r(filter_input_array(INPUT_POST, $filters));
*/
// Validation of numbers does not wor. It only checks the format

$arr = array(
    "name" => "peter well",
    "age" => "41",
    "email" => "pw@gmail.com"
);

$filters = array(
    "name" => array(
        "filter" => FILTER_CALLBACK,
        "options" => "ucwords"
    ),
    "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" =>array(
                "min_range" => 2,
                "max_range" => 100
            )
            ),
    "email" => FILTER_VALIDATE_EMAIL

    );

print_r(filter_var_array($arr, $filters));




?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>