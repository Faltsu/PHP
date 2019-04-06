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

//$sql = "SELECT MName, MDesc FROM movie WHERE MName LIKE '%$etsi%'";
$sql = "INSERT INTO movie (MName) VALUES ($etsi)"

if ($conn->query($sql)===TRUE){
    echo "Tallennettu";
    else{
        echo "Tallennus epäonnistui";
    }
}

$conn->close();
?>


</body>
</html>