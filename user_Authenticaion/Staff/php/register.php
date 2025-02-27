<?php
include("./config.php");

class studentRegister
{
  public $dbconn;


  function __construct($conn)
  {
    $this->dbconn = $conn;

  }
  function insertdata($request)
  {

    $FullName = $request['name'];
    $Email = $request['email'];
    $Phone_number = $request['phone'];
    $department = $request['department'];
    $DOB = $request['dob'];
    $Address = $request['address'];
    $Password = $request['password'];
    $Confirm_password = $request['confirm-password'];

    $sqlQuery = "INSERT  into   staff_register values('$FullName','$Email','$Phone_number','$department','$DOB','$Address','$Password','$Confirm_password')";
    $insert = $this->dbconn->prepare($sqlQuery);
    $result = $insert->execute();
    if ($result) {
      echo "<script> alert('Register sucessfull') </script>";
    } else {
      echo "<script> alert('Something went wrong') </script>";
    }


  }
  function viewdata()
  {

  }
}
$data = new studentRegister($conn);

if (isset($_POST["name"])) {


  $data->insertdata($_POST);
}
?>