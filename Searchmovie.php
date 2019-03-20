<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Getmovies</title>
</head>
<body>
<?php
$servername = "127.0.0.1:50367";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "moviedb";
$etsi = $_POST['etsi'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT MName, MDesc FROM movie WHERE MName LIKE '$_post'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["MName"]. " - Description: ". $row["MDesc"];
    }
} else {
    echo $dbname
	echo ($etsi);
	echo "0 results";
}

$conn->close();
?>


</body>
</html>