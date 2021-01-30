<?php
    $loggedIn = false;
    $arr = [1,2,3,4,5,6,7];
/*

    if ($loggedIn) {
        echo "You are logged in!<br>";
    } else {
        echo "You are NOT logged in!<br>";
    };


    echo ($loggedIn) ? "You man are logged in<br>" : "Hey dude, you are not logged in<br>";

    $isRegistered = ($loggedIn == true) ? true :false;
    echo $isRegistered;


    $age = 11;
    $score = 9;

    echo 'Your score is: ' . ($score  > 10 ? ($age > 10 ? 'Average': 'Exceptional' ) : ($age > 10? 'Not very good': 'Ok you can do better'));

*/

?>

<div>
    <?php if ($loggedIn)     {?>
        <h1>Welcome user</h1>
    <?php } else { ?>
        <h1>Welcome guest</h1>
    <?php }  ?>
</div>

<br>

<!-- Alternative way -->
<div>
    <?php if($loggedIn):  ?>
        <h1>Welcome user</h1>
    <?php else:  ?>
        <h1>Welcome guest</h1>
    <?php endif; ?>
</div>

<!-- Alternative way foreach-->
<div>
    <?php foreach($arr as $val):  ?>
        <?php echo $val; ?>
    <?php endforeach; ?>
</div>

<!-- Alternative way for-->
<div>
    <?php for($i=0; $i<count($arr); $i++):  ?>
        <?php echo $arr[$i]; ?>
    <?php endfor; ?>
</div>

<!-- Alternative way for reversed-->
<div>
    <?php for($i=count($arr); $i > 0; $i--):  ?>
        <?php echo $arr[$i-1]; ?>
    <?php endfor; ?>
</div>