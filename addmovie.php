<!doctype html>
<html>
<head>
<meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="col-sm-12 text-center">
<?php
include_once 'conn.php';
$lisaa =mysqli_real_escape_string($conn, $_POST["lisaa"]);
$arvostelu =mysqli_real_escape_string($conn, $_POST["arvostelu"]);
$sql = "INSERT INTO movie (MName, MDesc) VALUES ('$lisaa', '$arvostelu')";


if ($conn->query($sql)===TRUE){
   echo "<p id=otsikko>Tallennettu";

}
    else{
        echo "<p id=otsikko>Tallennus epäonnistui";
    }


$conn->close();
?>

<form action="/sivu.php">
        <input type="submit" value="Etusivulle"/>
      </form>
</div>

</body>
</html>
