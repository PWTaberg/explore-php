<?php

    //headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Post.php';


    //Instatintiate database
    $database = new Database();
    $db = $database->connect();


    //instatiate post
    $post = Post();

    // blog post query
    $result = $post->read();

    // Get row count
    $num = $result->rowCount();

    // Check if any post

    if ($num > 0) {
        $posts_arr = array();
        $posts_arr['data'] = array();

        while ($row = $result->fetch(PDO::FETCH_ASSOC) ) {
            extract($row);

            $post_item = array(
                'id' => $id,
                'title' => $title,
                'body' => html_entity_decode($body),
                'author'=>$author,
                'category_id'=> $category_id,
                'category_name' => $category_name
            );

             // push to 'data'
            array_push($post_arr['data'], $post_item);
        }
        // Turrn to JSON & output
        echo json_encode($post_arr);
       
    } else {
        //No posts
        echo json_encode (
            array('message' => 'No posts found');
        )
    }













?>