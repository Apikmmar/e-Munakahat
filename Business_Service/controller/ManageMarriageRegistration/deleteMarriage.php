<?php

include './database/connection.php';

// Disable foreign key checks
$conn->query('SET FOREIGN_KEY_CHECKS = 0');

// Delete data from the database
$id = $_GET['RegistrationNo'];

$sql = "DELETE FROM marriage_registration WHERE RegistrationNo=$RegistrationNo1";

if ($conn->query($sql) === TRUE) {
  header("Location: ../ManageMarriageRegistrationStaffView/m3_adminMarriageList.php");
} else {
  echo "Error: " . $sql . "<br>";
}

// Re-enable foreign key checks
$conn->query('SET FOREIGN_KEY_CHECKS = 1');

$conn-> close();
?>