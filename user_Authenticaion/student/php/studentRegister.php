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

    $FullName = $request['student-name'];
    $Email = $request['student-email'];
    $Phone_number = $request['student-phone'];
    $Course = $request['student-course'];
    $DOB = $request['student-address'];
    $Address = $request['student-dob'];
    $Password = $request['password'];
    $Confirm_password = $request['confirm-password'];

    $sqlQuery = "INSERT  into  student_register values('$FullName','$Email','$Phone_number','$Course','$DOB','$Address','$Password','$Confirm_password')";
    $insert = $this->dbconn->prepare($sqlQuery);
    $result = $insert->execute();
    if ($result) {
      echo "<script> alert('Register sucessfully') </script>";
    } else {
      echo "<script> alert('Something went wrong') </script>";
    }


  }
  function viewdata(){
    
  }
}
$data = new studentRegister($conn);

if (isset($_POST["student-name"])) {


  $data->insertdata($_POST);
}
?>