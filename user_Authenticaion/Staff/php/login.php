<?php
session_start();

include("./config.php");

if (isset($_POST["staff-email"])) {
  $Email = $_POST["staff-email"];
  $Password = $_POST["staff-password"];
  $Student = $conn->prepare("select * from  staff_login where Email='$Email' and Password='$Password'");
  $result = $Student->execute();
  if ($Student->rowCount() > 0) {
    echo "<script> alert('Log in sucessfully') </script>";
  } else {
    echo "<script> alert('Plz signup') </script>";
  }

}

?>
