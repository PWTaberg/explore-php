<?php
    require('config/config.php');
    require('config/db.php');

    #echo 'Connected<br>';

    # Delete the Post 
    //  Taking care of submit
    if(isset($_POST['delete'])) {

        // Get id from hidden input
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

       # echo $body;

        // Create query
        $query = "DELETE FROM posts WHERE id = {$delete_id}";

        #Will printout the query and die - for debugging
        #die($query);

        if (mysqli_query($conn, $query)) {
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '.mysqli_error($conn);
        }
    }   

    // Get the Post
    // Get Id + extra security against harmful chars using mysqli....
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    echo $id;

    // Create query
    $query = "SELECT * FROM posts WHERE id =" .$id;

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
        <a class="btn btn-default" href="<?php echo ROOT_URL;?>">Go Back</a>

        <h1><?php echo $post['title']; ?></h1>
        
        <small>Created on 
            <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?> 
        </small>

        <p><?php echo $post['body']; ?> </p>
        <hr>

        <!-- Delete Button -->
        <form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <!-- Used by submt function to get the ID-->
            <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>" >
            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>
        <!-- Edit Button -->
        <a href="<?php echo ROOT_URL; ?>editPost.php?id=<?php echo $post['id']; ?>" class="btn btn-default">Edit</a>
    </div>
    
<!-- Footer: inc/footer.php -->
<?php include('inc/footer.php'); ?>