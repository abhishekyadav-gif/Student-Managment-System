<?php

$host = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=studentmgst", $username, $password);
$result = $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if ($result) {
//   echo "data base connected";
// } else {
//   echo "something went wrong";
// }
?>