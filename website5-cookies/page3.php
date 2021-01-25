<?php

    # use an array of information for cooki
    $user = ['name' => 'Peter', 'email' => 'pw@gmail.com', 'age' => 49];

    # serialize array
    $user = serialize($user);

    #create cookie
    setcookie('user', $user, time()+3600);

    #echo serialized info
    echo $user;

    #un serialize 
    $user = unserialize($_COOKIE['user']);

    #echo array element
    echo $user['email'];

    print_r($user);


?>