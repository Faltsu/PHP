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
        <!-- otsikko div alkaa-->
<div id="lista">
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

$sql = "Select MName, MDesc FROM movie WHERE MName!='' AND MName IS NOT NULL And MDesc Is Not NULL And MDesc <> ''";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Name: ". $row["MName"]. " - Description: ". $row["MDesc"];
    }
} else {
    echo "EI LÖYDY ELOKUVAA!";
}

$conn->close();
?>
<!-- otsikko div loppuu-->
</div>
</body>
</html>
