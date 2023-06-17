<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat');
// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

session_start();
if (isset($_SESSION['icnum'])) {
  require '../../database/connection.php';

  $user_IC = $_SESSION['icnum'];

  $sql = "SELECT User_Name FROM user_registration_info WHERE User_IC = :user_ic";

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':user_ic', $user_IC, PDO::PARAM_STR);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($result) {
    $user_Name = $result['User_Name'];
  }
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
  <link rel="stylesheet" href="../assets/css/module3.css">
</head>

<body>
  <div class="overlay">
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white justify-content-center">
      <div class="position-sticky">
        <br>
        <div class="p-2 mb-1 bg-info text-white">
          <div class="userdata">
            <div class="userdata">
              <span><?php echo "Username: $user_Name "; ?></span><br>
              <span><?php echo "IC Number: $user_IC "; ?></span><br>
            </div>
          </div>
        </div>
        <br><br>
        <!-- navigation bar (left side) -->
        <div class="d-flex justify-content-center">
          <div class="list-group" style="width: 16rem;">
            <button class="btn btn-primary h6"><a href="../ManageUserAccountRegistrationView/m1_manageUserProfile.php" style="color:white;text-decoration:none;">Profil</a></button>
            <a href=""></a><button class=" btn btn-primary h6"><a href="../ManageUserMarriagePreparationView/m2_maincoursepage.php" style="color:white;text-decoration:none;">Kursus Pra-Perkahwinan</a></button>
            <a href=""></a><button class="btn btn-primary h6"><a href="../ManageUserMarriageApplicationView/m2_homepage.php" style="color:white;text-decoration:none;">Permohonan Berkahwin</a></button>
            <a href=""></a><button class="btn btn-primary h6"><a href="../ManageMarriageRegistrationUserView/m3_marriage.php" style="color:white;text-decoration:none;">Pendaftaran Perkahwinan</a></button>
            <a href=""></a><button class=" btn btn-primary h6"><a href="../ManageMarriageConsultationUserView/m4_userHomepage.php" style="color:white;text-decoration:none;">Khidmat nasihat</a></button>
            <a href=""></a> <button class=" btn btn-primary h6"><a href="../ManageIncentiveApplicationUserView/m5_userMainPage.php" style="color:white;text-decoration:none;">Insentif Khas Pasangan Pengantin</a></button>
            <a href=""></a><button class=" btn btn-dark h6" id="Keluar" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>?logout=true'">Keluar</button>
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
    <div class="content">
      <div class="p-2 mb-2 bg-primary text-white">
        <span class="h6 text-uppercase">Pendaftaran Perkahwinan > Status </span>
      </div>
      <div class="content-of-module">
        <div style="padding: 20px 0px 20px 6px">
          <table id="table1">
            <tr>
              <th style=" padding: 10px;  width:60px; background-color: grey;">Bil</th>
              <th style=" width:450px; background-color: grey">KP/Nama Isteri</th>
              <th style=" width:200px; background-color: grey">No.Slip Permohonan</th>
              <th style=" width:200px; background-color: grey">Tarikh Mohon</th>
              <th style=" width:150px; background-color: grey">Status</th>
            </tr>
            <tr>
              <td style="width: 50px; background-color: white;">1.</td>
              <td style="width: 100px; background-color: white;">000202022220 Aliya Binti Abdul </td>
              <td style="width: 150px; background-color: white;">M3/2023-000001</td>
              <td style="width: 50px; background-color: white;">23-6-2022</td>
              <td style="color:green; width: 50px; background-color: white;"><a href="../ManageMarriageCardApplicationUserView/m3_marriageCard.php"><b>Lulus</b></a></td>
            </tr>
          </table>
        </div>
      </div>

      <!-- external link to js file -->
      <script src="../assets/js/javascript.js" defer></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>