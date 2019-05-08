<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>

<!--Headeri-->
<div class="header">
  <div class="col-sm-12 text-center">
    <p id="oikeeotsikko">
      Elokuvadatabase
    </p>
  </div>
</div>
<!--container-->
<div class="container">
    <div class="col-sm-12 text-center">
        <!-- otsikko div alkaa-->
        <div id="otsikko">
<?php
session_start();
include_once 'conn.php';
$etsi =mysqli_real_escape_string($conn, $_POST["etsi"]);
$stop="no";
if (empty($etsi)) {
  echo "Et antanut nimeä";
}
else {
$sql = "SELECT MName,idMovie, MDesc FROM movie WHERE MName LIKE '%$etsi%' LIMIT 1";
$sql2 = "SELECT idMovie, MName FROM movie WHERE MName LIKE '%$etsi%' LIMIT 1";
$result = $conn->query($sql);
$result2=mysqli_query($conn,$sql2);
// Tallenna id arvostelua varten
$row=mysqli_fetch_array($result2,MYSQLI_NUM);
$id=$row[0];
$_SESSION["id"] = $id;
 
  
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Elokuvan nimi: ". $row["MName"]. "<br>Kuvaus: ". $row["MDesc"]. "<br> Arvostele elokuva";
  
    }
} else {
  echo $etsi;
  echo " nimistä elokuvaa ei löydy.";
  $stop="yes";
}
//<!-- else loppuu -->
}
$conn->close();
?>
<!-- Otsikko div loppuu-->
</div>
<?php 
    if(empty($etsi) or $stop=="yes"){ 
      ?>
          <!-- nappi joka palaa etusivulle --> 
        <br>    
        <form action="/sivu.php">
            <input type="submit" value="Etusivulle">
<?php
}  
    else { ?>
    </div>

<div class="col-sm-12 text-center">
  <form action="/arvostelusivu.php">
    <input type="submit" value="Katso elokuvan arvostelut">
  </form>
  <form action="/poisto.php" >
    <input type="submit" value="Poista elokuva" onclick="return confirm('Oletko varma, että haluat poistaa elokuvan? Tämä poistaa myös arvostelut.');">
  </form>
  <form action="/kuvaus.php" >
    <input type="submit" value="Vaihda elokuvan kuvaus">
  </form>
      <form action="arvostelu.php" method="post">
      <input type="text" name="arvostelukentta">
  <select name="arvosana">
    <option value="">Valitse arvosana</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
  </select>
    <br>
      <input type="submit" value="Arvostele elokuva">
      </form>
      <!-- nappi joka palaa etusivulle -->     
        <form action="/sivu.php">
            <input type="submit" value="Etusivulle">
        </form>
 <?php
}  
?>
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

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js.js"></script>

</body>
</html>