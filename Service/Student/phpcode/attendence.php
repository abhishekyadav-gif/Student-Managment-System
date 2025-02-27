<?php
include("./config.php");

if (isset($_POST["name"])) {

  $Name = $_POST["name"];
  $StudentID = $_POST["student_id"];
  $Date = $_POST["date"];
  $Attendence = $_POST["status"];
  $Remark = $_POST["remarks"];


  $sql = "INSERT INTO student_attendence VALUES('$StudentID','$Name','$Date','$Attendence','$Remark')";
  $data = $conn->prepare($sql);
  $result = $data->execute();
  if ($result) {
    echo "<script> alert('Student Data Added sucessfully') </script>";
  } else {
    echo "<script> alert('Something went wrong') </script>";
  }
}
