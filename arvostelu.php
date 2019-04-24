<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Getmovies</title>
</head>
<body>
<?php
session_start();
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
$idlahetti=$_Session['id'];

$sql = "INSERT INTO rating (RDesc, Movie_idMovie) VALUES ('$_POST[arvostelukentta]', '$idlahetti')";
echo $idlahetti;
    echo "asd";
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
