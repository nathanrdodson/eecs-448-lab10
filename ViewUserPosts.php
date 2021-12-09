<html>
<head>
    <title>Post Table</title>
</head>
<body>
<a href="AdminHome.html">Go back home</a><br>
<?php
// connection to DB
$mysqli = new mysqli("mysql.eecs.ku.edu", "n791d901", "oos4em7A", "n791d901");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$user = $_POST["users"];
$db_get = "SELECT * FROM Posts WHERE `author_id` = '$user';";

if($result = $mysqli->query($db_get)) 
{
    if(mysqli_num_rows($result) == 0)
    {
        echo "There are no posts to display. It's quiet in here... Too quiet <br>";

    } else {
        
        echo "<table><tr><th>Post ID</th><th>Content</th></tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr><td>" . $row['post_id'] . "</td>";
            echo "<td>" . $row['content'] . "</td></tr>";
        };
        echo "</table>";
    }
}
?>
</body>
<style>

    table, tr, td {
        border: 1px solid black;
    }

</style>
</html>
