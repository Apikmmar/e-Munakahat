<?php
// Perform server-side validation and authentication

// Retrieve the submitted IC number and password
$icNumber = $_POST['icnum'];
$password = $_POST['password'];

// Example database check: check if the IC number exists in the database
$database = [
    '000000000000' => 'password1',  // Example IC number and corresponding password
    '111111111111' => 'password2',  // Example IC number and corresponding password
    // ... add more IC numbers and passwords as needed
];

if (!array_key_exists($icNumber, $database)) {
    $errorMessage = "IC number not found in the database.";
    header("Location: login.html?error=" . urlencode($errorMessage));
    exit;
}

$storedPassword = $database[$icNumber];

if ($password === $storedPassword) {
    echo "Login successful!";
    // Additional code for successful login if needed
} else {
    $errorMessage = "Invalid password. The IC number and the password is not matching";
    header("Location: login.html?error=" . urlencode($errorMessage));
    exit;
}
?>
