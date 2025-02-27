<?php
include("./config.php");


if (isset($_POST["fname"])) {
  $Fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $DOB = $_POST['dob'];
  $Email = $_POST['email'];
  $Contact = $_POST['contact'];
  $StfID = $_POST['stafid'];
  $Position = $_POST['position'];
  $DOJ = $_POST['doj'];
  $Accountnum = $_POST['accountnumber'];
  $IFSC = $_POST['IFSCcode'];
  $Language = $_POST['language'];

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
  $Department = $_POST['department'];
  $State = $_POST['state'];
  $Country = $_POST['country'];
  $Bgroup = $_POST['blood-group'];
  $Emptime = $_POST['etime'];
  $qualifiation = $_POST['qualifiation'];
  $Address = $_POST['address'];
  $Exprience = $_POST['Exprience'];

  $sqlQuery = "INSERT into staff_details values('$Fname','$lname','$DOB','$Email','$Contact','$StfID','$Position','$DOJ','$Accountnum','$IFSC','$Language','$Gender','$Department','$State','$Country','$Bgroup','$Emptime','$qualifiation','$Address','$Exprience')";
  $insert = $conn->prepare($sqlQuery);

  $result = $insert->execute();

  if ($result) {
    echo "<script> alert('Student Data Added sucessfully') </script>";
  } else {
    echo "<script> alert('Something went wrong') </script>";
  }



}



?>