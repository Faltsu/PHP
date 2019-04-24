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
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    
    $sql2 = "SELECT idMovie, MName FROM movie WHERE MName LIKE '%$etsi%' LIMIT 1";
    $result2=mysqli_query($conn,$sql2);
    // Numeric array
$row=mysqli_fetch_array($result2,MYSQLI_NUM);
$id=$row[0];

$sql = "INSERT INTO rating (RDesc, Movie_idMovie) VALUES ('$_POST[arvostelukentta]', '$id')";
echo $id;

if ($conn->query($sql)===TRUE){
   echo "Tallennettu";
}
    else{
        echo "Tallennus epäonnistui";
    }


$conn->close();
?>


</body>
</html>
