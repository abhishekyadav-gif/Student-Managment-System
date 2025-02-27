<?php
include("./config.php");


if (isset($_POST["fname"])) {
  $Fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $DOB = $_POST['dob'];
  $Roll_no = $_POST['Rollno'];
  $Email = $_POST['email'];

  $Class = $_POST['class'];
  $Religios = $_POST['Religious'];
  $senior_sname = $_POST['12th'];
  $tenth_sname = $_POST['10th'];

  $Gender = isset($_POST['gender']) ? $_POST['gender'] : "";
  if ($Gender) {
    // Insert gender into database
    $sql = "INSERT INTO staff_details (gender) VALUES ('$Gender')";

    $Department = $_POST['department'];

    $State = $_POST['state'];
    $Country = $_POST['country'];
    $Bgroup = $_POST['blood-group'];
    $Emptime = $_POST['etime'];

    $qualifiation = $_POST['qualifiation'];
    $Address = $_POST['address'];

    $Exprience = $_POST['Exprience'];


  }
  $State = $_POST['state'];
  $Country = $_POST['country'];
  $Marks_type = $_POST['marks'];
  $twelthmarks = $_POST['12thmarks'];
  $tenthmarks = $_POST['10marks'];
  $Address = $_POST['address'];
  $Phone = $_POST['contact'];

  $sqlQuery = "INSERT into  studentdetails values('$Fname','$lname','$DOB','$Roll_no','$Email','$Class','$Religios','$senior_sname','$tenth_sname','$Gender','$State','$Country','$Marks_type','$twelthmarks','$tenthmarks','$Address','$Phone')";
  $insert = $conn->prepare($sqlQuery);

  $result = $insert->execute();

  if ($result) {
    echo "<script> alert('Student Data Added sucessfully') </script>";
  } else {
    echo "<script> alert('Something went wrong') </script>";
  }







}

?>