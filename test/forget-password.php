<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $icNumber = $_POST["icnum"];
  $email = $_POST["email"];

  // Perform validation and password retrieval logic here

  // Send password to the user's email
  $to = $email;
  $subject = "Password Reset";
  $message = "Your password: [RETRIEVED PASSWORD]"; // Replace [RETRIEVED PASSWORD] with the actual password
  $headers = "From: your_email@example.com"; // Replace with your email address or sender name

  $database = [
    '000000000000' => 'email1',  // Example IC number and corresponding password
    '111111111111' => 'email2',  // Example IC number and corresponding password
    // ... add more IC numbers and passwords as needed
  ];

  if (!array_key_exists($icNumber, $database)) {
      $errorMessage = "IC number not found in the database.";
      header("Location: forget-password.html?error=" . urlencode($errorMessage));
      exit;
  }

  $storedEmail = $database[$icNumber];

  if ($email === $storedEmail) {
      $successMessage = "Password reset link has been sent to your email: " . $email;
      header("Location: login.html?success=" . urlencode($successMessage));
      // Additional code for successful login if needed
  } else {
      $errorMessage = "The IC number and the email is not matching";
      header("Location: forget-password.html?error=" . urlencode($errorMessage));
      exit;
  }

  // Uncomment the following line to send the email (requires a working email configuration)
  // mail($to, $subject, $message, $headers);
  
  // Example response
  
}
?>
