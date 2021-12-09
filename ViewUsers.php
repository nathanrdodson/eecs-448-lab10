<html>
<head>
    <title>User Table</title>
</head>
<style>

    table, tr, td {
        border: 1px solid black;
    }

</style>
<body>
<a href="AdminHome.html">Go back home</a><br>
<?php
// connection to DB
$mysqli = new mysqli("mysql.eecs.ku.edu", "n791d901", "oos4em7A", "n791d901");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$db_get = "SELECT * FROM Users;";

if($result = $mysqli->query($db_get)) {
    if(mysqli_num_rows($result) == 0)
    {
        echo "There are no users to display. It's quiet in here... Too quiet <br>";

    } else {
        
        echo "<table><tr><th>User ID</th></tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr><td>" . $row['user_id'] . "</td></tr>";
        };

        echo "</table>";
    }
}
?>
</body>
</html>
