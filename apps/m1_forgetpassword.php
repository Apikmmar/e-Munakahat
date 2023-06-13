<?php
  // Create connection
  $conn = mysqli_connect('localhost', 'root', '', 'e-munakahat'); 
  // Check connection
  if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }

  // Perform server-side validation and processing
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $icnum = $_POST["icnum"];
    $email = $_POST["email"];
  
    // Check if icnum already exists in the database
    $query = "SELECT * FROM user_registration_info WHERE User_IC = '$icnum'";
    $result = mysqli_query($conn, $query);
    
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $storedPassword = $row['User_Password'];
      $storedEmail = $row['User_Email'];
    } else {
      $errorMessage = "Kad Pengenalan tidak wujud dalam sistem. Sila daftar masuk terlebih dahulu.";
      header("Location: m1_forgetpassword.php?error=" . urlencode($errorMessage));
      exit;
    }
    // Perform validation and password retrieval logic here
    if ($email === $storedEmail) {
      // Set up the email parameters
      $to = $email; // User's email address
      $subject = 'Password Recovery'; // Email subject
      $message = 'Your password is: ' . $storedPassword; // Message body
      $headers = 'From: TESTING@gmail.com'; // Sender's email address

      // Send the email
      $mailSent = mail($to, $subject, $message, $headers);
      // Check if the email was sent successfully
      if ($mailSent === true) {
        echo "Email sent successfully!";
        $successMessage = "Kata laluan berjaya dihantar ke emel. Sila cek emel anda.";
        header("Location: m1_login.php?success=" . urlencode($successMessage));
      } else {
        echo "Failed to send email.";
        $errorMessage = "Kata laluan gagal dihantar. Sila masukkan maklumat dengan betul.";
        header("Location: m1_forgetpassword.php?error=" . urlencode($errorMessage));
      }
      //$successMessage = "Password reset link has been sent to your email: " . $email;
      //header("Location: m1_login.php?success=" . urlencode($successMessage));
      // Additional code for successful login if needed
    } else {
        $errorMessage = "Emel tidak sah. Sila pastikan emel yang dimasukkan adalah sah.";
        header("Location: m1_forgetpassword.php?error=" . urlencode($errorMessage));
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/jata-pahang.png">

<!-- Theme CSS -->
<!-- build:css @@webRoot/assets/css/theme.min.css -->

<link rel="stylesheet" href="assets/css/login.css">
<!-- endbuild -->

<script src="assets/js/forget-password.js"></script>

  <title>e-Munakahat</title>
</head>

<body class="overlay">
    <div class="d-lg-block sidebarLogin bg-sidebar" >
        <div class="position-sticky">
            <br><br><br><br><br><br>
            <div class="ps-12 pt-10">
                <img src="assets/img/jata-pahang.png" alt="logo-persekutuan-malaysia" class="img-upper-interface ms-2">
                <h1 class="fw-medium text-white" style="font-size: 4em;">SISTEM</h1>
                <h1 class="fw-medium text-white" style="font-size: 4em;">MAKLUMAT</h1>
                <h1 class="fw-medium text-white" style="font-size: 4em;">PERKAHWINAN</h1>
                <h1 class="fw-medium text-white" style="font-size: 4em;">ISLAM PAHANG</h1>
                <h3 class="fw-medium text-white">JABATAN AGAMA ISLAM NEGERI PAHANG</h3>
            </div>
        </div>
    </div>

    <nav class="row bg-primary fixed-top">
        <div class="col-md-5">
            <table class="justify-content-start d-flex">
                <tr >
                    <td>
                        <button class="navbar-button" id="hey">&#9776;</button>
                    </td>
                    <td>
                        <h4 class="text-white pt-2 ps-12 fs-2">e-Munakahat</h4>
                    </td>
                    <td>
                        <img src="assets/img/Logo-KPM-BI-font-putih.png" alt="logo-persekutuan-malaysia" class="img-upper-interface">
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-7 justify-content-end d-flex pt-2 pe-5">
            
            &nbsp;&nbsp;&nbsp;<span class="fw-medium text-white" id="day"></span>
            &nbsp;&nbsp;&nbsp;<span class="fw-medium text-white" id="clock"></span>
        </div>
        
    </nav>
  <!-- container -->
  <div class="content mt-23 pe-23">
    <div class="justify-content-end d-flex">
      <div class="col-md-6">
          <!-- Card body -->
          <div class="card-body mt-10">
            <header>
              <h2>Lupa Kata Laluan</h2>
            </header>
            <div>
              <p>Sila masukkan maklumat pengguna anda.</p>
              <p id="errorContainer" class="my-n3"></p>
              <hr class="mb-6">
            </div>
            <!-- Form -->
            <form action="m1_forgetpassword.php" method="POST" onsubmit="return forgetpasswordData()">
              <!-- Username -->
              <div class="form-group">
                <label for="icnum" class="form-label">No. Kad Pengenalan</label>
                <input type="text" id="icnum" class="form-control" name="icnum" placeholder="" required>
                <br>
              </div>
              <!-- Password -->
              <div class="form-group">
                <label for="email" class="form-label">Emel</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="" required>
                <br>
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary" value="login">Hantar Kata Laluan</button>
                </div>
                <hr>
                <div class="d-md-flex justify-content-center">
                  <div>
                    <a href="m1_login.php">Log Masuk</a>
                    <a> | </a>
                    <a href="m1_changepassword.php" class="text-inherit fs-5 p">Tukar Kata Laluan</a>
                    <a> | </a>
                    <a href="m1_forgetpassword.php" class="text-inherit fs-5">Lupa Kata Laluan?</a>
                  </div>
                </div>
              </div>
            </form>
    </div>
</body>

</html>