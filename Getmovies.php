<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Getmovies</title>
</head>
<body>
<?php
include_once 'conn.php';

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


</body>
</html>
