<!doctype html>
<html>
<head>
<title>Elokuvan arvostelut</title>
<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<div class="header">
  <div class="col-sm-12 text-center">
    <p id="oikeeotsikko">
      Elokuvadatabase
    </p>
  </div>
</div>
<!-- sisältö -->
<div class="container">
    <div class="col-sm-12 text-center">
        
<div id="otsikko">
    Arvostelut
        </div>
        
<div id="lista">
<?php
session_start();
include_once 'conn.php';
$id =mysqli_real_escape_string($conn, $_SESSION["id"]);
//echo $id;
$sql = "SELECT MName, MDesc FROM movie WHERE idMovie=$id";
$sql2= "SELECT RRating, RDesc FROM rating WHERE movie_idMovie=$id";
$result = $conn->query($sql);
$result2 = $conn->query($sql2);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?><div id="otsikko"> <?php
        echo "<br> Elokuvan Nimi: ". $row["MName"]. " - Kuvaus: ". $row["MDesc"];
        ?> </div> <?php
    }
}
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        echo "<br> Arvosana: ". $row["RRating"]. " - Arvostelu: ". $row["RDesc"];
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
<!--Footer-->
<div class="footer">
      <div class="col-sm-12 text-center"> 
        <p>Tehnyt Kim Laakso ja Jarkko Hämäläinen</p>
      </div>
    </div>
    <!--container loppuu-->
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
