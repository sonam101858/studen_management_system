<?php

//code to connect with data base
$servername = "localhost" ;
$username = "root";
$password = "";
$conn;

try {
    //create connection
    $conn = mysqli_connect($servername,$username,$password);
    //check connection
    if ($conn) {
      echo "<script>console.log('connection succesful');</script>";
    }
}
catch (Exception $e) {
   echo "<script>console.error('Connecion failed ');</script>";
}






 ?>
