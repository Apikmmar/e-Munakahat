<?php
    session_start();
    // Create connection
    $conn = mysqli_connect('localhost', 'root', '', 'e-munakahat'); 
    // Check connection
    if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
    }

    // Check if the user is not logged in
    if(!isset($_SESSION['icnum'])) {
        header("Location: ../ManageLoginView/m1_login.php");
        exit;
    } else {
        $icnum = $_SESSION['icnum'];
        // Check if icnum already exists in the database
        $query = "SELECT * FROM staff_registration_info WHERE Staff_IC = '$icnum'";
        $result = mysqli_query($conn, $query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['Staff_Name'];
            $akses = $row['Staff_AccessCategory'];
            $jabatan = $row['Staff_PAID'];
        } else {
            echo "User not found.";
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
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/css/module2.css">

</head>
<body>
    <div class="overlay">
        <!-- Sidebar -->
        <nav class="collapse d-lg-block sidebar collapse bg-white justify-content-center">
            <div class="position-sticky">
                <br>
                <div class="p-2 mb-1 bg-info text-white">
                    <div class="userdata">
                        <span>ID :<p></p></span>
                        <span>Nama : <?php echo $name; ?><p></p></span>
                        <span>Akses : <?php echo $akses; ?><p></p></span>
                        <span>Jabatan : <?php echo $jabatan; ?><p></p></span>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="list-group" style="width: 16rem;">
                        <button class="btn btn-secondary h6" onclick="window.location.href='m1_homepagestaff.php'">Laman Utama</button>
                        <button class="btn btn-success h6" onclick="window.location.href='m1_viewStaffProfile.php?staff_ic=<?php echo $icnum;?>'">Profil</button>
                        <button class="btn btn-success h6">Permohonan Berkahwin</button>
                        <button class="btn btn-success h6">Pendaftaran Perkahwinan</button>
                        <button class="btn btn-success h6">Khidmat Nasihat</button>
                        <button class="btn btn-success h6">Insentif Khas Pasangan Pengantin</button>
                        <button class="btn btn-success h6">Laporan</button>
                        <button class="btn btn-success h6" onclick="window.location.href='m1_staffUtility.php'">Pengguna</button>
                        <button class="btn btn-success h6" id="Keluar" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>?logout=true'">Keluar</button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- navbar -->
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
                <span class="h6 text-uppercase">LAMAN UTAMA</span>
            </div>
            <div class="content-of-module-admin">
                <br><br>
                <div class="text-center">
                    <h5>Selamat Datang ke Sistem Maklumat Perkahwinan Negeri Pahang</h5>
                    <p>Sistem Ini Membantu Jabatan Agama Islam Pahang(JAIP) Menguruskan Maklumat Perkahwinan Secara Sistematik</p>
                    <em>Klik Manual Pengguna Sistem di sini</em>
                </div>
                <br><br>
            </div>
        </div>
    </div>

    <script src="assets/js/javascript.js" defer></script>
    <script src="assets/js/module2js.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>