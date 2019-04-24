<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Getmovies</title>
</head>
<body>
<?php
$servername = "127.0.0.1:50367";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "moviedb";
$etsi = $_POST["etsi"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT MName,idMovie, MDesc FROM movie WHERE MName LIKE '%$etsi%' LIMIT 1";
$sql2 = "SELECT idMovie, MName FROM movie WHERE MName LIKE '%$etsi%' LIMIT 1";
$result = $conn->query($sql);
$result2=mysqli_query($conn,$sql2);

// Numeric array
$row=mysqli_fetch_array($result2,MYSQLI_NUM);
printf ($row[0],$row[1]);


 
	
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["MName"]. " - Description: ". $row["MDesc"] .$row["idMovie"];
	
    }
} else {
	echo $etsi;
	echo "<br>0 results";
}

$conn->close();
?>
<div class="row">
 <div class=col-sm-12>
   <textarea name="arvostelukentta" form="arvosteluform">Kirjotia arvostelu tähän</textarea>
   <form action="arvostelu.php" id="arvosteluform">
     <input type="submit" name="Tallenna arvostelu">
   </form>
 </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div>

</body>
</html>
