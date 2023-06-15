<?php
// Database connection settings
include 'connection.php';

// Check if a complaint ID is provided
if (isset($_GET['RegistrationNo'])) {
  $RegistrationNo1 = $_GET['RegistrationNo'];
  // Retrieve the complaint details from the database
  $sql = "SELECT * FROM marriage_registration WHERE RegistrationNo = $RegistrationNo1";
  $result = $conn->query($sql);
  date_default_timezone_set('Asia/Kuala_Lumpur');
  $currentdate = date('Y-m-d'); // Get the current date
  $currenttime = date('H:i:s'); // Get the current time

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $row = $result->fetch_assoc();
    $User_Name1 = $row['User_Name'];
    $User_IC1 = $row['User_IC'];
    $Partner_Name1 = $row['Partner_Name'];
    $Partner_IC1 = $row['Partner_IC'];
    $RegistrationNo = $row['RegistrationNo'];
    $Registration_date1 = $row['Registration_date'];
    $Registration_Status1 = $row['Registration_Status'];
  } else {
    echo "RegistrationNo not found.";
    exit;
  }
} else {
  echo "No RegistrationNo no provided.";
  exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate and sanitize user inputs
  $updatedComplaintType = mysqli_real_escape_string($conn, $_POST['complainttype']);
  $updatedDescription = mysqli_real_escape_string($conn, $_POST['description']);
  // Update the complaint in the database
  $updateSql = "UPDATE complaint_list SET Complaint_date = '$currentdate', Complaint_time = '$currenttime', Complaint_type = '$updatedComplaintType', Complaint_description = '$updatedDescription' WHERE Complaint_ID = $complaintId";

  if ($conn->query($updateSql) === true) {
    echo "Complaint updated successfully.";
    header("Location: complaintmainpage.php");
    // You can redirect the user to a different page or display a success message here
  } else {
    echo "Error updating complaint: ";
    // You can handle the error scenario as per your requirements
  }
}

$conn->close();
