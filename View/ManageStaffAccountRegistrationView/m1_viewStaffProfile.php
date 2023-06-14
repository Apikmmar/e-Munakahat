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
        }
        if($_GET['staff_ic']) {
            $icNumber = $_GET['staff_ic'];
            // Check if icnum already exists in the database
            $query = "SELECT * FROM staff_registration_info WHERE Staff_IC = '$icNumber'";
            $result = mysqli_query($conn, $query);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $nama = $row['Staff_Name'];
                $jawatan = $row['Staff_Position'];
                $access = $row['Staff_AccessCategory'];
                $paid = $row['Staff_PAID'];
                $emel = $row['Staff_Email'];
                $gender = $row['Staff_Gender'];
                $phonenum = $row['Staff_PhoneNo'];
                $password = $row['Staff_Password'];
            } else {
                echo "User not found.";
            }
        } else {
            header("Location: m1_staffUtility.php");
            exit;
        }
    }

    // Check if the logout parameter is set
    if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
        // User requested to log out, unset the session variables
        $_SESSION = array();
        session_destroy();
        
        // Redirect the user to the login page or any other desired page
        header("Location: ../ManageLoginView/m1_login.php");
        exit;
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
    <link rel="stylesheet" href="../assets/css/module1.css">

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
                        <button class="btn btn-success h6" id="staffloginmainpage">Laman Utama</button>
                        <button class="btn btn-secondary h6" onclick="window.location.href='m1_viewStaffProfile.php?staff_ic=<?php echo $icnum;?>'">Profil</button>
                        <button class="btn btn-success h6" id="staffprepcoursemainpage">Kursus Pra Perkahwinan</button>
                        <button class="btn btn-success h6" id="staffapplymainpage">Kebenaran Berkahwin</button>
                        <button class="btn btn-success h6" id="staffmarriagemainpage">Pendaftaran Nikah</button>
                        <button class="btn btn-success h6" id="staffconsultationmainpage">Khidmat Nasihat</button>
                        <button class="btn btn-success h6" id="staffincentivemainpage">Insentif Khas Pasangan Pengantin</button>
                        <button class="btn btn-success h6" id="staffprepcoursemainpage">Laporan</button>
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
                <span class="h6 text-uppercase">PROFIL</span>
            </div>
            <div class="content-of-module-admin">
                <div id="custalign">
                    <form action="" method="post">
                        <div>
                            <div id="inputformpadding">
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <table style="border-collapse: collapse; border:none; margin-top: 20px;" id="formprofiletable">
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>No. Kad Pengenalan :</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <label><?php echo $icNumber; ?></label>
                                            </td>
                                        </tr>
                                        <tr style="border:none; ">
                                            <td style="border:none;" >
                                                <label><b>Nama Pengguna:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <label><?php echo $nama; ?></label>
                                            </td>
                                        </tr>
                                        <tr style="border:none; ">
                                            <td style="border:none;" >
                                                <label><b>Jantina:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <label><?php echo $gender; ?></label>
                                            </td>
                                        </tr>
                                        <tr style="border:none; ">
                                            <td style="border:none;" >
                                                <label><b>No. Telefon:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <label><?php echo $phonenum; ?></label>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>Jawatan Pengguna:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <label><?php echo $jawatan; ?></label>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>PAID:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <label><?php echo $paid; ?></label>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>Kategori Akses:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <label><?php echo $access; ?></label>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>Emel:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <label><?php echo $emel; ?></label>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>Kata Laluan:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <label><?php echo $password; ?></label>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="btn-block d-flex justify-content-center">
                            <a class="btn btn-secondary" href="m1_staffUtility.php" >Kembali</a>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/javascript.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>