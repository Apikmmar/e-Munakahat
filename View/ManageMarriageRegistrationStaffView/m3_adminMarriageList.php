<?php
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
  <link rel="stylesheet" href="../assets/css/function.css">
  <!-- internal stylesheet -->
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th {
      background-color: #f2f2f2;
    }

    .icon {
      width: 30px;
      height: auto;
      cursor: pointer;
    }

    .back-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
    }
  </style>
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
              <button class="btn btn-dark h6" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>?logout=true'">Keluar</button>
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
    <div class="table-wrapper">
      <div class="content">
        <!-- CRUD table -->
        <table>
          <thead>
            <tr>
              <th style="width: 15%">Permohonan No</th>
              <th style="width: 15%">Tarikh Permohonan</th>
              <th style="width: 20%">Status Permohonan</th>
              <th style="width: 15%">Tarikh Kemas Kini </th>
              <th style="width: 50%">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM marriage_registration";
            $result = $conn->query($sql);

            while ($row = mysqli_fetch_assoc($result)) {
              $RegistrationNo = $row['RegistrationNo'];
              $Registration_Date = $row['Registration_Date'];
              $Registration_Type = $row['Registration_Type'];
              $Registration_Status = $row['Registration_Status'];
              $Accept_Date = $row['Accept_Date'];
            ?>
              <tr>
                <td style="width: 15%"><?php echo $Registration_Type; ?></td>
                <td style="width: 15%"><?php echo $Registration_Date; ?></td>
                <?php
                $class = '';
                switch ($Registration_Status) {
                  case 'Lulus':
                    $class = 'badge badge-success';
                    break;
                  case 'Untuk Diluluskan':
                    $class = 'badge badge-warning';
                    break;
                  case 'Gagal':
                    $class = 'badge badge-danger';
                    break;
                  default:
                    $class = 'badge';
                }
                ?>
                <td style="width: 20%"><span class="<?php echo $class; ?>"><?php echo $Registration_Status; ?></span></td>
                <td style="width: 15%"><?php echo $Accept_Date; ?></td>
                <td style="color:green; background-color: white;width: 20%;">
                  <!-- viewFile -->
                  <a href="../../business_service/controller/ManageMarriageRegistration/staffMarriageRegistrationController/viewMarriage.php?RegistrationNo<?php echo $RegistrationNo; ?>"><img class=" icon" src="../assets/img/view.png" alt="View"></a>&nbsp;
                  <!-- editFile -->
                  <a href="updateMarriage.php?RegistrationNo=<?php echo $RegistrationNo; ?>"><img class="icon" src="../assets/img/edit.png"></a>&nbsp;
                  <!-- approveFile -->
                  <a href="../ManageMarriageRegistrationStaffView/m3_adminApproveM.php?RegistrationNo=<?php echo $RegistrationNo; ?>"><img class="icon" src="../assets/img/approved.png"></a>
                  <!-- downloadFile -->
                  <button style="border:none;" onclick="downloadFile()"><img class="icon" src="../assets/img/print.png"></button>
                  <script>
                    function downloadFile() {
                      var filename = 'Borang Pendaftaran Nikah 001.php';
                      var content = 'Slip Pendaftaran Perkahwinan ';

                      var element = document.createElement('a');
                      element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(content));
                      element.setAttribute('download', filename);

                      element.style.display = 'none';
                      document.body.appendChild(element);

                      element.click();

                      document.body.removeChild(element);
                    }
                  </script>
                  <!-- deleteFile -->
                  <a href="../../business_service/controller/ManageMarriageRegistration/staffMarriageRegistrationController/deleteMarriage.php?RegistrationNo=<?php echo $RegistrationNo; ?>" onclick="return confirm('Are you really want to delete this publication?')"> <img class="icon" src="../assets/img/false.png"></a>
                </td>
              </tr>
            <?php } ?>
            <!-- Add more rows as needed -->
          </tbody>
        </table>

        <div> <a href="../ManageMarriageRegistrationStaffView/m3_adminMarriage.php"><button style="margin-top:25px; float:right;" class=" btn btn-success">Kembali</button></a></div>
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