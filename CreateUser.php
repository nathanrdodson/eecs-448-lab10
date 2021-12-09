<?php

// connection to DB
$mysqli = new mysqli("mysql.eecs.ku.edu", "n791d901", "oos4em7A", "n791d901");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST["create_user"];
$db_get = "SELECT user_id FROM Users WHERE user_id = '$username';";

if($result = $mysqli->query($db_get)) {
    if(mysqli_num_rows($result) == 0)
    {
        // echo "TRUE";
        $mysqli->query("INSERT INTO Users (user_id) VALUES ('$username');");
        echo "User added successfully! <br>";
        echo "<a href='CreateUser.html'>Go back...</a>";

    } else {
        echo "User already exists! <br>";
        echo "<a href='CreateUser.html'>Go back...</a>";
    }
} 

?>