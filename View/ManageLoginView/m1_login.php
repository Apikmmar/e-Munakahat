<?php
  session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/img/jata-pahang.png">]

<!-- Theme CSS -->
<!-- build:css @@webRoot/assets/css/theme.min.css -->
<link rel="stylesheet" href="../assets/css/login.css">
<!-- endbuild -->

<script src="../assets/js/login.js"></script>

  <title>e-Munakahat</title>
</head>

<body class="overlay">
    <div class="d-lg-block sidebarLogin bg-sidebar" >
        <div class="position-sticky">
            <br><br><br><br><br><br>
            <div class="ps-12 pt-10">
                <img src="../assets/img/jata-pahang.png" alt="logo-persekutuan-malaysia" class="img-upper-interface ms-2">
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
                        <img src="../assets/img/Logo-KPM-BI-font-putih.png" alt="logo-persekutuan-malaysia" class="img-upper-interface">
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
              <h2 > Log Masuk</h2>
            </header>
            <div>
              <p>Sila masukkan maklumat pengguna anda.</p>
              <p id="errorContainer" class="my-n3"></p>
              <p id="successContainer" class="my-n3"></p>
              <hr class="mb-6">
            </div>
            <!-- Form -->
            <form action="../../business_service/controller/ManageLogin/LoginController.php" method="POST" onsubmit="return loginData()">
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
              <!-- User Type -->
              <div class="form-group">
                <label for="userType" class="form-label">Jenis Pengguna</label>
                <select name="userType" class="form-select" id="userType">
                  <option value="biasa">Pengguna</option>
                  <option value="staff">Staff</option>
                </select>
                <br>
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid ">
                  <button type="submit" class="btn btn-primary" value="login">Masuk</button>
                </div>
                <hr>
                <div class="d-md-flex justify-content-center">
                  <div>
                    <a href="../ManageUserAccountRegistrationView/m1_register.php" >Daftar Akaun</a>
                    <a> | </a>
                    <a href="m1_changepassword.php" class="text-inherit fs-5 p">Tukar Kata Laluan</a>
                    <a> | </a>
                    <a href="m1_forgetpassword.php" class="text-inherit fs-5">Lupa Kata Laluan?</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
</body>

</html>