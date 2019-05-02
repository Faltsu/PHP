<!doctype html>
<html>
<head>
<meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css.css">
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


$sql = "INSERT INTO movie (MName, MDesc) VALUES ('$_POST[lisaa]', '$_POST[arvostelu]')";


if ($conn->query($sql)===TRUE){
   echo "<p id=otsikko>Tallennettu";

}
    else{
        echo "Tallennus epäonnistui";
    }


$conn->close();
?>
<div class="col-sm-12 text-center">
<form action="/sivu.php">
        <input type="submit" value="Etusivulle"/>
      </form>
</div>

</body>
</html>
