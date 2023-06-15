<?php
// Database connection settings
include 'connection.php';


// Check if a registration no is provided
if (isset($_GET['RegistrationNo'])) {
  $RegistrationNo1 = $_GET['RegistrationNo'];
  // Retrieve the Registration details from the database
  $sql = "SELECT * FROM marriage_registration WHERE RegistrationNo = $RegistrationNo1";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $User_Name1 = $row['User_Name'];
    $User_IC1 = $row['User_IC'];
    $Partner_Name1 = $row['Partner_Name'];
    $Partner_IC1 = $row['Partner_IC'];
    $RegistrationNo = $row['RegistrationNo'];
    $Registration_date1 = $row['Registration_date'];
    $Registration_Status1 = $row['Registration_Status'];
  } else {
    echo "registration not found.";
    exit;
  }
} else {
  echo "No registration no provided.";
  exit;
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
  <link rel="stylesheet" href="../assets/css/view3.css">
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
        <span class="h6 text-uppercase">PENDAFTARAN PERKAHWINAN > Mohon Pengesahan Nikah > Senarai Permohonan Nikah</span>
      </div>
      <div class="content-of-module-admin">
        <div style="padding: 20px 0px 20px 6px">
          <h5 style="color:black;"> &nbsp; Senarai Permohonan Nikah </h5>
          <section class="content">
            <div class="col-md-6">
              <div class="">
                <div class="form-body">
                  <div class="form-group">                   
                    <label for="date">Date: <?php echo $date; ?></label><br>
                    <label for="time">Time: <?php echo $time; ?></label>
                  </div>
                  <div class="form-group">
                    <label for="complainttype">Marriage Registration</label>
                    <select id="complainttype" class="form-control custom-select" disabled>
                      <option selected disabled>Choose the type of complaint</option>
                      <option value="Unsatisfied Expert's Feedback" <?php if ($complaintType === "Unsatisfied Expert's Feedback") echo 'selected'; ?>>Unsatisfied Expert's Feedback</option>
                      <option value="Wrongly Assigned Research Area" <?php if ($complaintType === "Wrongly Assigned Research Area") echo 'selected'; ?>>Wrongly Assigned Research Area</option>
                      <option value="Misleading or Incorrect Information" <?php if ($complaintType === "Misleading or Incorrect Information") echo 'selected'; ?>>Misleading or Incorrect Information</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" class="form-control" row="4" placeholder="Write a description of the complaint" disabled><?php echo $description; ?></textarea>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <a href="complaintmainpage.php" class="btn btn-secondary">Back</a>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </section>


          </td>
          </tr>
          </tbody>
          </table>
          <br>
          <div> <a href="../ManageMarriageRegistrationStaffView/m3_adminMarriage.php"><button style="margin-top:25px; float:right;" class=" btn btn-success">Kembali</button></a></div>

          <!-- external link to js file -->

          <script src="../assets/js/javascript.js" defer></script>
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
