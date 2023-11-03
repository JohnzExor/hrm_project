<?php
$servername = "database-1.cb3jbdsl26za.ap-southeast-1.rds.amazonaws.com";
$username = "admin";
$password = "ADB1st2023";
$dbase = "hrm_project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbase);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  $result = mysqli_query($conn, "SELECT * FROM students");
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<tr>
              <td>' . $row["idstudents"] . '</td>
              <td>' . $row["program"] . '</td>
              <td>' . $row["block"] . '</td>
              <td>' . $row["last_name"] . '</td>
              <td>' . $row["first_name"] . '</td>
            </tr>
      ';
    }
  }
}
