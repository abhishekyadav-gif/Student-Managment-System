<?php
include("./config.php");


if (isset($_POST['name'])) {
  $Name = $_POST['name'];
  $Email = $_POST['email'];
  $Subject = $_POST['subject'];
  $Message = $_POST['message'];

  $result = $conn->prepare("INSERT INTO contact values('$Name','$Email','$Subject','$Message')");
  $result->execute();
  if ($result) {
    echo "<script> alert('Thank You for Contact') </script>";
  } else {
    echo "<script> alert('Something went wrong') </script>";
  }


}
?>