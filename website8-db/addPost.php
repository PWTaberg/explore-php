<?php
    require('config/config.php');
    require('config/db.php');

    //  Check for submit
    if(isset($_POST['submit'])) {
        // Get form data
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);

        # Add validation

       # echo $body;

 

        // Create query
        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

        if (mysqli_query($conn, $query)) {
            header('Location: '.ROOT_URL.'');
        } else {
            echo 'ERROR: '.mysqli_error($conn);
        }
    }   

?>
<!-- Header inc/header.php-->
<?php include('inc/header.php'); ?>

        <div class='container'>
        <h1>Add Post</h1>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control"></textarea>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>    
    </div>
<!-- Footer: inc/footer.php -->
<?php include('inc/footer.php'); ?>