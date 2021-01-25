<?php 

    #update cookie
    setcookie('username', 'Frank', time()+(86400*30));
   
    #unset, delete cookie - set to passed time
    setcookie('username', 'Frank', time() -3600);

    if (count($_COOKIE) > 0 ){

        echo 'cookies are set'. count($_COOKIE). ' saved<br>';
    } else {
        echo 'cookie is not set<br>';
    }

    if(isset($_COOKIE['username'])) {
        echo 'User '.$_COOKIE['username']. ' is set <br>';
    } else {
        echo 'cookie is not set';
    }


?>