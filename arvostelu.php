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
include_once 'conn.php';
$id=$_SESSION["id"];

$sql = "INSERT INTO rating (RDesc, Movie_idMovie, Rrating) VALUES ('$_POST[arvostelukentta]', '$id', '$_POST[arvosana]')";
// echo "$id";
// echo "<p id=otsikko>Arvostelu tallennettu</p>";
// echo "$_POST[arvostelukentta]. ";
// echo "$_POST[arvosana]";
if ($conn->query($sql)===TRUE){
   echo "<p id=otsikko>Arvostelu tallennettu</p>";
}
    else{
        echo "<p id=otsikko>Arvostelua ei tallennettu. Tarkista, että annoit arvosanan ja arvostelusi on alle 300 merkkiä pitkä</p>";
    }


$conn->close();
?>
<div class="col-12-sm text-center">
<form action="/sivu.php">
            <input type="submit" value="Etusivulle">
        </form>
</div>
</div>
</body>
</html>
