<?php
// Database connection settings
include 'link.php';


// Disable foreign key checks
$conn->query('SET FOREIGN_KEY_CHECKS = 0');

// Delete data from the database
$CardApplicationNo = $_GET['CardApplicationNo'];

$sql = "DELETE FROM marriagecard_application WHERE CardApplicationNo = $CardApplicationNo";

if ($conn->query($sql) === TRUE) {
header("Location: ../../../../View/ManageMarriageCardApplicationStaffView/m3_adminCardList.php");
} else {
echo "Error: " . $sql . "<br>";
}

// Re-enable foreign key checks
$conn->query('SET FOREIGN_KEY_CHECKS = 1');

$conn->close();
