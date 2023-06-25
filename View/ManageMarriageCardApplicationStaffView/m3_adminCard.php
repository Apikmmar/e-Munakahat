<?php
session_start();
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat');
// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>e-Munakahat</title>
  <link rel="shortcut icon" href="../assets/img/jata-pahang.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!-- external stylesheet -->
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="stylesheet" href="../assets/css/module3.css">

</head>

<body>
  <div class="overlay">
    <!-- Sidebar -->
    <nav class="collapse d-lg-block sidebar collapse bg-white justify-content-center">
      <div class="position-sticky">
        <br>
        <div class="p-2 mb-1 bg-info text-white">
          <div class="userdata">
            ID : 710204070801
            <br>
            Nama :Hamsha Bin Hamdan
            <br>
            Akses :Kakitangan
            <br>
            Jabatan :Jabatan Agama Islam Negeri Pahang
          </div>
        </div>
        <br>
        <!-- navigation bar (left side) -->
        <div class="d-flex justify-content-center">
          <div class="list-group" style="width: 16rem;">
            <div class="list-group" style="width: 16rem;">
              <button class="btn btn-secondary h6"><a href="../ManageStaffAccountRegistrationView/m1_homepagestaff.php" style="color:white;text-decoration:none;">Laman Utama</a></button>
              <button class="btn btn-success h6"><a href="../ManageStaffMarriagePreparationView/m2_maincoursepagestaff.php" style="color:white;text-decoration:none;">Kursus Pra Perkahwinan</a></button>
              <button class="btn btn-success h6"><a href="../ManageStaffMarriageApplicationView/m2_mainapplypagestaff.php" style="color:white;text-decoration:none;">Kebenaran Berkahwin</a></button>
              <button class="btn btn-success h6"><a href="../ManageMarriageRegistrationStaffView/m3_adminMarriage.php" style="color:white;text-decoration:none;">Pendaftaran Nikah</a></button>
              <button class="btn btn-success h6"><a href="../ManageMarriageConsultationAdvisorView/m4_advisorApplicationList.php" style="color:white;text-decoration:none;">Khidmat Nasihat</a></button>
              <button class="btn btn-success h6" id="staffincentivemainpage"><a href="../ManageIncentiveApplicationStaffView/m5_staffMainPage.php" style="color:white;text-decoration:none;">Insentif Khas Pasangan Pengantin</a></button>
              <button class="btn btn-success h6" onclick="window.location.href='m1_staffUtility.php'">Pengguna</button>
              <button class="btn btn-dark h6" id="Keluar" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>?logout=true'">Keluar</button>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- title bar -->
    <nav class="p-1 mb-1 bg-primary text-white justify-content-center fixed-top">
      <div class="h-span-container">
        <button class="navbar-button" id="hey">&#9776;</button>
        <h4 class=".float-start">e-Munakahat</h4>
        <img src="../assets/img/jata-pahang.png" alt="jata-pahang" class="imglogo-upper-interface">
        <img src="../assets/img/Logo-KPM-BI-font-putih.png" alt="logo-persekutuan-malaysia" class="img-upper-interface">
        <div class="timedatebox">
          <span id="date"></span>&nbsp;<span id="time"></span>
        </div>
        <div class="float-hub">
          <h6>HUBUNGI KAMI</h6>
        </div>
      </div>
    </nav>

    <!-- content -->
    <div class="content-admin">
      <div class="p-2 mb-2 bg-success text-white">
        <span class="h6 text-uppercase">PENDAFTARAN PERKAHWINAN > Mohon Pengesahan Kad Nikah Dan Sijil</span>
      </div>
      <div class="content-of-module-admin">
        <div style="padding: 20px 0px 20px 6px">
          <button><a style="text-decoration:none;" href="../ManageMarriageRegistrationStaffView/m3_adminMarriage.php">
              <h6 style="color:black;">Mohon Pengesahan Nikah</h6>
            </a></button>
          <button class=" btn btn-secondary"><a style="text-decoration:none;" href="../ManageMarriageRegistrationStaffView/m3_adminCard.php">
              <h6 style="color:white;">Mohon Pengesahan Kad Nikah Dan Sijil</h6>
            </a></button><br><br><br>
          <b>No.Akuan Terima</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"><br><br>
          <b>Status</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select required>
            <option selected value="No val">Sila pilih</option>
            <option value="wait">Untuk Diluluskan</option>
            <option value="lulus">lulus</option>
            <option value="gagal">gagal</option>
          </select>
          <div style="padding: 10px 0px 20px 700px"><a href="../ManageMarriageCardApplicationStaffView/m3_adminCardList.php"><button class=" btn btn-success">Carian</button></a></div>
        </div>
      </div>
    </div>
    <!-- external link to js file -->
    <script src="../assets/js/javascript.jss" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>