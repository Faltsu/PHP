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
$etsi = $_POST["etsi"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT MName,idMovie, MDesc FROM movie WHERE MName LIKE '%$etsi%' LIMIT 1";
$sql2 = "SELECT idMovie FROM movie WHERE MName LIKE '%$etsi%' LIMIT 1";
$result = $conn->query($sql);
$id = $conn->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["MName"]. " - Description: ". $row["MDesc"];
    }
} else {
	echo $etsi;
	echo "<br>0 results";
}

$conn->close();
?>


</body>
</html>