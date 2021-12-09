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

$posts = $_POST["checked"];

foreach($_POST["checked"] as $deleted)
{
    mysqli_query($mysqli, "DELETE FROM Posts WHERE  post_id = '$deleted'");
    echo "Deleted post #" . $deleted . "<br>";
}
?>

</body>
</html>
