<?php

// this is attendence table from student 
include("./config.php");


$read = $conn->prepare("SELECT Student_ID, Name, Date, Attendence_Status , Remark FROM student_attendence");
$sql=
$read->execute();
$data = $read->fetchAll();
// print_r( $data);

echo "<table border='1'>";
foreach ($data as $row) {

  echo "<tr>
<td>" . $row["Student_ID"] . "</td>
<td>" . $row["Name"] . "</td>
<td>" . $row["Date"] . "</td>
<td>" . $row["Attendence_Status"] . "</td>
<td>" . $row["Remark"] . "</td>

</tr>";
}
echo "</table>";

?>