<?php

// connection to DB
$mysqli = new mysqli("mysql.eecs.ku.edu", "n791d901", "oos4em7A", "n791d901");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST["create_user"];
$post = $_POST["create_post"];
$db_get = "SELECT user_id FROM Users WHERE user_id = '$username';";

if($result = $mysqli->query($db_get)) {
    if(mysqli_num_rows($result) == 0)
    {
        echo "User does not exist... Failed to make post! <br>";
        echo "<a href='CreatePosts.html'>Go back...</a>";

    } else {

        $mysqli->query("INSERT INTO Posts (content,author_id) VALUES ('$post','$username');");
        echo "Post created sucessfully! <br>";
        echo "<a href='CreatePosts.html'>Go back...</a>";
    }
} 

?>