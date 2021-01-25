<?php
    require('config/config.php');
    require('config/db.php');

    //  Taking care of submit
    if(isset($_POST['submit'])) {

        // Get id from hidden input
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);


        // Get form data
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        # Add validation

       # echo $body;

        // Create query
        $query = "UPDATE posts SET 
            title = '$title',
            author = '$author',
            body = '$body'
                WHERE id = {$update_id}";

        #Will printout the query and die - for debugging
        #die($query);

        if (mysqli_query($conn, $query)) {
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '.mysqli_error($conn);
        }
    }   

     // Taking care of Editing the form
     // Get Id + extra security against harmful chars using mysqli....
     $id = mysqli_real_escape_string($conn, $_GET['id']);
     echo $id;

    // Create query
    $query = "SELECT * FROM posts WHERE id =".$id;

    // Get Result
    $result = mysqli_query($conn, $query);

    // Fetch single post
    $post = mysqli_fetch_assoc($result);

    //Inspect the result
    #var_dump($posts);
   
    // Free the result
    mysqli_free_result($result);

    // Close Connection
    mysqli_close($conn);


?>
<!-- Header inc/header.php-->
<?php include('inc/header.php'); ?>

        <div class='container'>
        <h1>Add Post</h1>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
            </div>
            <!-- Used by submt function to get the ID-->
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>" >
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>    
    </div>
<!-- Footer: inc/footer.php -->
<?php include('inc/footer.php'); ?>