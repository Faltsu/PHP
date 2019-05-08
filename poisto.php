<!doctype html>
<html>
<head>
<script src="js.js"></script>
<meta charset="UTF-8">
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
<!-- container-->
<div class="container">
<div class="col-sm-12 text-center">
<?php
include_once 'conn.php';
session_start();
$varmista=confirm("oletko varma että haluat poistaa elokuvan? Tämä poistaa myös arvostelut.");
$id =mysqli_real_escape_string($conn, $_SESSION["id"]);

$sql = "DELETE FROM movie WHERE idMovie='$id'";
		
			if ($conn->query($sql)===TRUE)
			{
   			echo "<p id=otsikko>Poistettu";

			}
    		else
    		{
        echo "<p id=otsikko>Poisto epäonnistui";
    		}



	?>
<form action="/sivu.php">
        <input type="submit" value="Etusivulle"/>
      </form>
</div>
<?php
$conn->close();
?>
</div>
<!--Footer-->
<div class="footer">
      <div class="col-sm-12 text-center"> 
        <p>Tehnyt Kim Laakso ja Jarkko Hämäläinen</p>
      </div>
    </div>
    <!--container loppuu-->
    </div>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
