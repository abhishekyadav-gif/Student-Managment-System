<?php
include("./config.php");


// Retrieve form data
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$staff_id = $_POST['stafid'];
$position = $_POST['position'];
$doj = $_POST['doj'];
$account_number = $_POST['accountnumber'];
$ifsc_code = $_POST['IFSCcode'];
$languages = $_POST['language']; // Handle multiple checkboxes or inputs
$gender = isset($_POST['gender']) ? $_POST['gender'] : "";
$department = $_POST['department'];
$state = $_POST['state'];
$country = $_POST['country'];
$blood_group = $_POST['blood-group'];

// Process languages as a comma-separated string
if (is_array($languages)) {
  $language_known = implode(", ", $languages);
} else {
  $language_known = $languages;
}

// Insert data into the database
$sql = "INSERT INTO staff_details 
        VALUES ('$first_name', '$last_name', '$dob', '$email', '$contact', '$staff_id', '$position', '$doj', '$account_number', '$ifsc_code', '$language_known', '$gender', '$department', '$state', '$country', '$blood_group')";

if ($conn->query($sql) === TRUE) {
  echo "New staff details inserted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>