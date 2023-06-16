<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat');
// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

$RegistrationNo = $_GET['a'];
$query = "SELECT * FROM marriage_registration WHERE RegistrationNo='$RegistrationNo'";

$result = mysqli_query($conn, $query);
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
  <link rel="stylesheet" href="../assets/css/view3.css">
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
    <div id="content-wrapper">

      <!-- main content (right side) -->
      <div id="main-content">

        <form class="expenses-form" method="post" action="../../controller/ManageMarriageRegistration/staffMarriageRegistrationController/update-authenticator.php?a=<?php echo $RegistrationNo ?>"> 
            <div class="expenses-details">
              <div class="expenses-title">
                <input type="text" name="expenses-title" value=<?php echo $row['expenses_title'] ?>>
              </div>

              <?php
              if (isset($_SESSION['ERROR_MESSAGE'])) {
                $i = 0;
                if (in_array("title cannot be empty.", $_SESSION['ERROR_MESSAGE'])) {
                  echo "<p style='color:red;font-size:12px;'>" . $_SESSION['ERROR_MESSAGE'][$i] . "</p>";
                  $i += 1;
                }
              }
              ?>

              <div class="date">
                <input type="text" name="date" placeholder="Date, ex: 2022-01-01" value=<?php echo $row['expenses_date'] ?>>
              </div>

              <?php
              if (isset($_SESSION['ERROR_MESSAGE'])) {
                if (in_array("date cannot be empty.", $_SESSION['ERROR_MESSAGE'])) {
                  echo "<p style='color:red;font-size:12px;'>*" . $_SESSION['ERROR_MESSAGE'][$i] . "</p>";
                  $i += 1;
                }
                if (in_array("invalid date format.", $_SESSION['ERROR_MESSAGE'])) {
                  echo "<p style='color:red;font-size:12px;'>*" . $_SESSION['ERROR_MESSAGE'][$i] . "</p>";
                  $i += 1;
                }
              }
              ?>

              <div class="description">
                <textarea placeholder="Expenses Description" name="expenses-description" cols="130" rows="10"><?php echo $row['expenses_description'] ?></textarea>
              </div>

              <div class="expenses-amount">
                <input type="text" name="expenses-amount" placeholder="Expenses Amount, ex: 22.10" value=<?php echo $row['expenses_amount'] ?>>
              </div>

              <?php
              if (isset($_SESSION['ERROR_MESSAGE'])) {
                if (in_array("expenses amount cannot be empty.", $_SESSION['ERROR_MESSAGE'])) {
                  echo "<p style='color:red;font-size:12px;'>*" . $_SESSION['ERROR_MESSAGE'][$i] . "</p>";
                  $i += 1;
                }
                if (in_array("expenses amount must be numbers.", $_SESSION['ERROR_MESSAGE'])) {
                  echo "<p style='color:red;font-size:12px;'>*" . $_SESSION['ERROR_MESSAGE'][$i] . "</p>";
                  $i = NULL;
                }
              }
              $_SESSION['ERROR_MESSAGE'] = null;
              ?>

            </div>
            <?php } ?>

          <div class="button-section">
            <a href="../../View/ManageMarriageRegistrationStaffView/m3_adminMarriageList.php"><button type="button" id="cancel-button">Cancel</button></a>
            <button type="submit" id="add-button" name="update">Update</button>
          </div>
        </form>
      </div>
    </div>
</body>

</html>