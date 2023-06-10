<?php
// Perform server-side validation and processing

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $icNumber = $_POST['icnum'];
  $oldPassword = $_POST['password'];
  $newPassword = $_POST['newpassword'];
  $confirmPassword = $_POST['confirmpassword'];

  // Example database check: check if the IC number exists in the database
$database = [
    '000000000000' => 'password1',  // Example IC number and corresponding password
    '111111111111' => 'password2',  // Example IC number and corresponding password
    // ... add more IC numbers and passwords as needed
];

if (!array_key_exists($icNumber, $database)) {
    $errorMessage = "IC number not found in the database.";
    header("Location: change-password.html?error=" . urlencode($errorMessage));
    exit();
}

$storedPassword = $database[$icNumber];

if ($oldpassword === $storedPassword) {
    $successMessage = "The password has successfully changed.";
    header("Location: login.html?success=" . urlencode($successMessage));
    // Additional code for successful login if needed
} else {
    $successMessage = "The password has successfully changed.";
    header("Location: login.html?success=" . urlencode($successMessage));
    exit();
}
}
?>
