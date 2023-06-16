<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat');

// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

// Check if a registration no is provided
if (isset($_GET['RegistrationNo'])) {
  $RegistrationNo = $_GET['RegistrationNo'];

  // Sanitize the input to prevent SQL injection
  $RegistrationNo = mysqli_real_escape_string($conn, $RegistrationNo);

  // Retrieve the registration details from the database
  $sql = "SELECT * FROM marriage_registration WHERE RegistrationNo = $RegistrationNo";
  $result = $conn->query($sql);
  date_default_timezone_set('Asia/Kuala_Lumpur');
  $currentdate = date('Y-m-d'); // Get the current date

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $Registration_Date = $row['Registration_Date'];
    $Registration_Type = $row['Registration_Type'];
    $Registration_Status = $row['Registration_Status'];
    $Accept_Date = $row['Accept_Date'];
  } else {
    echo "Registration not found.";
    exit;
  }
} else {
  echo "No registration no provided.";
  exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate and sanitize user inputs
  $updatedRegistration_Status = mysqli_real_escape_string($conn, $_POST['Registration_Status']);
  $updatedAccept_Date = mysqli_real_escape_string($conn, $_POST['Accept_Date']);

  // Update the registration in the database
  $updateSql = "UPDATE marriage_registration SET Accept_Date = '$currentdate', Registration_Status = '$updatedRegistration_Status', Accept_Date = '$updatedAccept_Date' WHERE RegistrationNo = '$RegistrationNo'";

  if ($conn->query($updateSql) === true) {
    echo "Registration updated successfully.";
    // You can redirect the user to a different page or display a success message here
  } else {
    echo "Error updating registration: " . $conn->error;
    // You can handle the error scenario as per your requirements
  }
}

$conn->close();
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
  <link rel="stylesheet" href="../assets/css/function.css">

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
    <div class="content-admin">
      <div class="p-2 mb-2 bg-success text-white">
        <span class="h6 text-uppercase">PENDAFTARAN PERKAHWINAN > Mohon Pengesahan Nikah > MAKLUMAT KELULUSAN</span>
      </div>
      <div class="content-of-module-admin">
        <div style="padding: 20px 0px 20px 6px;">
          <form action="./m3_adminApproveM.php?RegistrationNo=<?php echo $RegistrationNo; ?>" method="POST">
            
            <div class="form-group">
              <label for="Registration_Type">Permohonan No</label>
              <input type="text" name="Registration_Type" class="form-control" placeholder="<?php echo $Registration_Type; ?>" disabled>
            </div>
            <div class="form-group">
              <label for="Registration_Date">Tarikh permohonan</label>
              <input type="text" name="Registration_Date" class="form-control" placeholder="<?php echo $Registration_Date; ?>" disabled>
            </div>
            <div class="form-group">
              <label for="Registration_Status">Status Permohonan</label>
              <select id="Registration_Status" class="form-control custom-select" name="Registration_Status" required>
                <option selected disabled>Sila pilih status</option>
                <option value="Lulus" <?php if ($Registration_Status === "Lulus") echo 'selected'; ?>>Lulus</option>
                <option value="Untuk Diluluskan" <?php if ($Registration_Status === "Untuk Diluluskan") echo 'selected'; ?>>Untuk Diluluskan</option>
                <option value="Gagal" <?php if ($Registration_Status === "Gagal") echo 'selected'; ?>>Gagal</option>
              </select>
            </div>
            <div class="form-group">
              <label for="Accept_Date">Tarikh Kemas Kini</label>
              <input type="date" name="Accept_Date" class="form-control" required>
            </div>

            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="./m3_adminMarriageList.php" class="btn btn-secondary">kembali</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- external link to js file -->
  <script src="../assets/js/javascript.js" defer></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>