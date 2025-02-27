<?php

include("./config.php");

if (isset($_POST["email"])) {
  $Email = $_POST["email"];
  $Password = $_POST["password"];
  $Student = $conn->prepare("select * from  student_login where Email='$Email' and Password='$Password'");
  $result = $Student->execute();
  if ($Student->rowCount() > 0) {
    echo "<script> alert('Log in sucessfully') </script>";
  } else {
    echo "<script > alert('Plz Signup !') </script>";
  }

}

?>