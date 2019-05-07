<!doctype html>
<html>
<head>
<title>Elokuvan arvostelut</title>
<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <div class="col-sm-12 text-center">
        <!--css div alkaa-->
<div id="otsikko">
    Arvostelut
        </div>
        
<div id="lista">
<?php
include_once 'conn.php';
$id =mysqli_real_escape_string($conn, $_SESSION["id"]);

$sql = "Select MName, MDesc FROM movie WHERE idMovie=$id";
$sql2= "Select rating.RRating, rating.RDesc FROM rating INNER JOIN movie ON movie.idMovie=rating.movie_idMovie;";
$result = $conn->query($sql);
$result2 = $conn->query($sql2)
;


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Nimi: ". $row["MName"]. " - Kuvaus: ". $row["MDesc"];
    }
}
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Numero: ". $row["RRating"]. " - Kuvaus: ". $row["RDesc"];
    }
}
$conn->close();
?>
    </div>
    <div id="otsikko">            
    <!-- nappi joka palaa etusivulle -->
        <form action="/sivu.php">
            <input type="submit" value="Etusivulle">
        </form>
        </div> 
    </div>
<!--css div loppuu-->
</body>
</html>
