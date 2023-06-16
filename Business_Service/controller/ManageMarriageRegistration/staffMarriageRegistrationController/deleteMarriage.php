<?php
// Database connection settings
include 'link.php';


// Disable foreign key checks
$conn->query('SET FOREIGN_KEY_CHECKS = 0');

// Delete data from the database
$RegistrationNo = $_GET['RegistrationNo'];

$sql = "DELETE FROM marriage_registration WHERE RegistrationNo = $RegistrationNo";

if ($conn->query($sql) === TRUE) {
header("Location: ../../../../View/ManageMarriageRegistrationStaffView/m3_adminMarriageList.php");
} else {
echo "Error: " . $sql . "<br>";
}

// Re-enable foreign key checks
$conn->query('SET FOREIGN_KEY_CHECKS = 1');

$conn->close();
?>