<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="col-sm-12 text-center">
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
$id=$_SESSION["id"];

$sql = "INSERT INTO rating (RDesc, Movie_idMovie) VALUES ('$_POST[arvostelukentta]', '$id')";
// echo "$id";
echo "<p id=otsikko> $_POST[arvostelukentta] arvostelu tallennettu</p>";
    echo "$_POST[arvostelukentta]";
   

if ($conn->query($sql)===TRUE){
   echo "Tallennettu";
}
    else{
        echo "Tallennus epäonnistui";
    }


$conn->close();
?>

</div>
</body>
</html>
