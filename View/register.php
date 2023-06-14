<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $icnum = $_POST['icnum'];
  $name = $_POST['nama'];
  $gender = $_POST['gender'];
  $bangsa = $_POST['bangsa'];
  $warga = $_POST['warga'];
  $address = $_POST['address'];
  $phonenum = $_POST['phonenum'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];

  // Perform validation
  $errors = array();

  // Validate IC Number
  if (empty($icnum)) {
    $errors[] = 'No. Kad Pengenalan harus diisi';
  }

  // Add more validation rules for other fields if needed

  // If there are no validation errors, proceed to store the data in the database
  if (empty($errors)) {
    // TODO: Store data in the database using your preferred method (e.g., MySQL, PDO, etc.)
    // You need to establish a database connection and create the necessary table

    // Example using MySQLi
    $conn = new mysqli('localhost', 'username', 'password', 'database');
    if ($conn->connect_error) {
      die('Connection failed: ' . $conn->connect_error);
    }

    // Prepare and execute the SQL query
    $sql = "INSERT INTO users (icnum, nama, gender, bangsa, warga, address, phonenum, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssss", $icnum, $name, $gender, $bangsa, $warga, $address, $phonenum, $email, $password);
    $stmt->execute();

    // Close the database connection
    $stmt->close();
    $conn->close();

    // Display success message
    $successMessage = "Data has been successfully stored in the database.";
    header("Location: login.html?success=" . urlencode($successMessage));
  } else {
    // Display validation errors
    foreach ($errors as $error) {
      $errorMessage += $error . " + ";
    }
    header("Location: register.html?error=" . urlencode($errorMessage));
    exit;
  }
}
?>
