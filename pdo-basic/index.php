<?php
require('config/config.php');
#require('config/db.php');

echo "PDO-Basic";
echo "<br>";

// Set DSN
$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
echo $dsn;
echo "<br>";

// Create PDO instance, (connection)
$pdo = new PDO($dsn, DB_USER, DB_PASS);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

#NEEDED FOR LIMIT to WORK with a parameter
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


// PDO QUERY
$stmt = $pdo->query('SELECT * FROM posts');

// Loop  through the result -result as associated array
/*
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['title'] . '<br>';
    var_dump($row);
}

echo 'Fetch as OBJ';
echo "<br>";
*/
// Loop  through the result as object
/*
while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
    echo $row->title . '<br>';

}
*/
/*
// Loop  through the result as object
while ($row = $stmt->fetch()) {
    echo $row->title . '<br>';
    //var_dump($row);
}
*/

echo 'so far so good';
echo "<br>";

// PREPARED STATEMENTS

// Insecure
//$sql = "SELECT * FROM posts WHERE author = '$author'";

// FETCH MULTIPLE POSTS

/*
// Positional params - order of parameters is important

$author = 'Peter';
$sql = "SELECT * FROM posts WHERE author = ?";
$stmt = $pdo->prepare($sql);

#positional parameters
$stmt->execute([$author]);

$posts = $stmt->fetchAll();

//var_dump($posts);

// Loop throug
foreach( $posts as $post) {
    echo $post->title. '<br>';
}
*/

// Named parameter
/*
$author = 'Peter';
$is_published = true;
$sql = "SELECT * FROM posts WHERE author = :author  && is_published = :is_published";
$stmt = $pdo->prepare($sql);

#named parameters
$stmt->execute(['author' => $author, 'is_published' => $is_published]);

$posts = $stmt->fetchAll();

//var_dump($posts);

// Loop throug
foreach( $posts as $post) {
    echo $post->title. '<br>';
}

*/
// FETCH SINGLE POST
/*
$id = 2;
$sql = "SELECT * FROM posts WHERE id = :id";
$stmt = $pdo->prepare($sql);

#named parameters
$stmt->execute(['id' => $id]);

$post = $stmt->fetch();

echo $post->body;
*/
/*
// GET ROW COUNT
$author = 'Ronny';
$stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');

#positional parameters
$stmt->execute([$author]);

$postCount = $stmt->rowCount();
echo $postCount;
echo '<br>';
*/

// INSERT DATA
/*
$title = "Post eight";
$body = "New info, inserted";
$author = "Peter";

$sql = "INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)";

$stmt = $pdo->prepare($sql);
$stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);

echo 'Post Added';
*/
/*
// UPDATE DATA
$id= 6;
$body = "Update info, inserted";
$author = "Ronny";

$sql = "UPDATE posts SET body=:body WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->execute(['body' => $body, 'id' => $id]);

echo 'Post Update';
*/

// DELETE POST

/*
$id= 4;

$sql = "DELETE FROM  posts  WHERE id=:id";

$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);

echo 'Post Deleted';
*/

//SEARCH DATA
$search = "%post%";
$is_published = true;
$limit = 2;

## FOR LILIT TO WORK WITH PARAMETER SEE ATTRIBUTES ABOVE
$sql = 'SELECT * FROM posts WHERE title LIKE ? && is_published=? LIMIT ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$search, $is_published, $limit]);

$posts = $stmt->fetchAll();

foreach($posts as $post){
    echo $post->title .'<br>';
}

?>
<!--
<h1><?php echo $post->title; ?> </h1>
<h3><?php echo $post->body; ?> </h3>
<h4> by <?php echo $post->author; ?> </h4>
-->