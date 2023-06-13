<?php
  // Create connection
  $conn = mysqli_connect('localhost', 'root', '', 'e-munakahat'); 
  // Check connection
  if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
  }

  // Perform server-side validation and processing
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $icnum = $_POST['icnum'];
    $password = $_POST['password'];
    $newPassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
    $confirmPassword = $_POST['confirmpassword'];
    
    // Check if icnum already exists in the database
    $query = "SELECT * FROM user_registration_info WHERE User_IC = '$icnum'";
    $result = mysqli_query($conn, $query);
    
    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $storedPassword = $row['User_Password'];
    } else {
      $errorMessage = "Kad Pengenalan tidak wujud dalam sistem. Sila daftar masuk terlebih dahulu.";
      header("Location: m1_changepassword.php?error=" . urlencode($errorMessage));
      exit;
    }
    if ($password === $storedPassword) {
      if ($newPassword === $confirmPassword) {
        echo "Change successful!";
        $updateSql = "UPDATE user_registration_info SET User_Password = '$newPassword' WHERE User_IC = '$icnum'";
        $update = mysqli_query($conn, $updateSql);
        $successMessage = "Kata Laluan berjaya ditukar.";
        header("Location: m1_login.php?success=" . urlencode($successMessage));
        exit;
      } else {
        $errorMessage = "Kata Laluan Baru dan Ulang Kata Laluan Baru tidak sama. Sila pastikan Ulang Kata Laluan Baru sama dengan Kata Laluan Baru.";
        header("Location: m1_changepassword.php?error=" . urlencode($errorMessage));
        exit;
      }
    } else {
        $errorMessage = "Kata Laluan tidak sah. Sila masukkan semula kata laluan yang sah.";
        header("Location: m1_changepassword.php?error=" . urlencode($errorMessage));
        exit;
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

<script src="assets/js/change-password.js"></script>

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
              <h2>Tukar Kata Laluan</h2>
            </header>
            <div>
              <p>Sila masukkan maklumat pengguna anda.</p>
              <p id="errorContainer" class="my-n3"></p>
              <hr class="mb-6">
            </div>
            <!-- Form -->
            <form action="m1_changepassword.php" method="POST" onsubmit="return changepasswordData()">
              <!-- Username -->
              <div class="form-group">
                <label for="icnum" class="form-label">No. Kad Pengenalan</label>
                <input type="text" id="icnum" class="form-control" name="icnum" placeholder="" required>
                <br>
              </div>
              <!-- Password -->
              <div class="form-group">
                <label for="password" class="form-label">Kata Laluan</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required>
                <br>
              </div>
              <!-- New Password -->
              <div class="form-group">
                <label for="newpassword" class="form-label">Kata Laluan Baru</label>
                <input type="password" id="newpassword" class="form-control" name="newpassword" placeholder="**************" required="">
                <br>
              </div>
              <!-- Confirm Password -->
              <div class="form-group">
                <label for="confirmpassword" class="form-label">Ulang Kata Laluan Baru</label>
                <input type="password" id="confirmpassword" class="form-control" name="confirmpassword" placeholder="**************" required="">
                <br>
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid ">
                  <button type="submit" class="btn btn-primary" value="change-password">Tukar Kata Laluan</button>
                </div>
                <hr>
                <div class="d-md-flex justify-content-center">
                  <div>
                    <a href="m1_login.php" >Log Masuk</a>
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