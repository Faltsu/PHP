<!doctype html>
<html>
<head>
<title>Getmovies</title>
<meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <div class="col-sm-12 text-center">
        <!--css div alkaa-->
<div id="otsikko">
    Elokuvalista
        </div>
        
<div id="lista2">
<?php
    include_once 'conn.php';

$sql = "Select MName, MDesc FROM movie WHERE MName!='' AND MName IS NOT NULL And MDesc Is Not NULL And MDesc <> ''";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    echo '<table class="table table-striped table-bordered table-hover">';
    echo"<TR><TD>Name</TD><TD>Description:</TD></TR>";
    while($row = $result->fetch_assoc()) {  
        echo "<tr><td>";
        echo $row["MName"];
        echo "</td><td>";
        echo $row["MDesc"];
        echo "</TD></tr>";
    }
    echo "</table>";
} else {
    echo "EI LÖYDY ELOKUVAA!";
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
