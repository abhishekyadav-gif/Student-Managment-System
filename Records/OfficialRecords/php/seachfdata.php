<?php
include("./config.php");
if (isset($_POST["search"])) {
  $search = $_POST["search"];

  // $student = $conn->prepare("select *from signup where Username='$search'");
  // seach by specific keys 
  $student = $conn->prepare("select *from staff_attendence where Name like '$search%'");
  #for chaking one elemt anywhere in word use both side %

  $student->execute();
  $result = $student->fetchAll();
  // print_r($result);

  echo "<table border='1' style='border-collapse: collapse; width: 100%; text-align: left;'>";

  // Adding table header
  echo "<tr style='background-color: #4CAF50; color: white;'>
        <th style='padding: 8px;'>Employee ID</th>
        <th style='padding: 8px;'>Name</th>
        <th style='padding: 8px;'>Date</th>
        <th style='padding: 8px;'>Attendence_Status</th>
      </tr>";

  // Iterating through data
  foreach ($result as $row) {
    echo "<tr style='background-color: #f2f2f2;'>
            <td style='padding: 8px;'>" . $row["Employee_ID"] . "</td>
            <td style='padding: 8px;'>" . $row["Name"] . "</td>
            <td style='padding: 8px;'>" . $row["Date"] . "</td>
            <td style='padding: 8px;'>" . $row["Attendence_Status"] . "</td>
          </tr>";
  }
  echo "</table>";



}

?>