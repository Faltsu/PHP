<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Getmovies</title>
</head>
<body>
<?php
$servername = "127.0.0.1:50367";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "moviedb";

//testi
$uusielokuva = $_POST['lisaa']
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//onks nimet oikei
$sql = "INSERT INTO movie (MName) VALUES ($uusielokuva)";

$result=mysql_query($sql) or die("Epäonnistui");
}
//if ($conn->query($sql)===TRUE){
//    echo "Tallennettu";
//}
//    else{
//        echo "Tallennus epäonnistui";
//    }


//$conn->close();
?>


</body>
</html>
