<?php
    session_start();
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
        $query = "SELECT * FROM user_registration_info WHERE User_IC = '$icnum'";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $name = $row['User_Name'];
            $emel = $row['User_Email'];
            $gender = $row['User_Gender'];
            $dob = $row['User_DOB'];
            $age = $row['User_Age'];
            $bangsa = $row['User_Race'];
            $warga = $row['User_Nationality'];
            $phonenum = $row['User_HP'];
            $pendidikan = $row['User_Edu'];
            $address = $row['User_AddressInIC'];
            $currentaddress = $row['User_Address'];
            $pekerjaan = $row['User_JobSector'];
            $jobaddress = $row['User_JobAddress'];
        } else {
            echo "Complaint not found.";
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
                        <span>Nama :<p></p></span>
                        <span>Akses :<p></p></span>
                        <span>Jabatan :<p></p></span>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="list-group" style="width: 16rem;">
                        <button class="btn btn-primary h6" id="Profil" onclick="window.location.href='m1_manageUserProfile.php'">Profil</button>
                        <button class="btn btn-primary h6" id="KursusPraPerkahwinan">Kursus Pra-Perkahwinan</button>
                        <button class="btn btn-primary h6" id="PermohonanBerkahwin">Permohonan Berkahwin</button>
                        <button class="btn btn-dark h6" id="PendaftaranPerkahwinan">Pendaftaran Perkahwinan</button>
                        <button class="btn btn-primary h6" id="KhidmatNasihat">Khidmat nasihat</button>
                        <button class="btn btn-primary h6" id="insentifKhas">insentif Khas</button>
                        <button class="btn btn-primary h6" id="Keluar" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>?logout=true'" >Keluar</button>
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
        <div class="content">
            <div class="p-2 mb-2 bg-primary text-white">
                <span class="h6 text-uppercase">PROFIL</span>
            </div>
            <div class="content-of-module">
                <div id="custalign">
                    <form action="" method="post">
                        <div class="" >
                            <div class="d-flex flex-row">
                                <div>
                                    <table id="formprofiletable">
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <b>Maklumat Peribadi <span class="red-asterisk">*</span></b>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>No. Kad Pengenalan<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="icnum" disabled>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Emel<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="emel" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none; ">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Nama<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="name" required>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Jantina<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="gender" disabled>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Tarikh Lahir<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="dob" disabled>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Umur<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="nama" disabled>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Bangsa<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <select name="bangsa" class="form-select" id="bangsa">
                                                        <option selected disabled value="">- Sila Pilih Bangsa -</option>
                                                        <option value="melayu">Melayu</option>
                                                        <option value="cina">Cina</option>
                                                        <option value="india">India</option>
                                                        <option value="bangladeshi">Bangladeshi</option>
                                                        <option value="pakistani">Pakistani</option>
                                                        <option value="sri lanka">Sri Lanka</option>
                                                        <option value="indonesian">Indonesian</option>
                                                        <option value="bumiputera sabah">Bumiputera Sabah</option>
                                                        <option value="bumiputera sarawak">Bumiputera Sarawak</option>
                                                        <option value="orang asli">Orang Asli (Semenanjung)</option>
                                                        <option value="lain-lain asia">Lain-lain Asia</option>
                                                        <option value="european">European</option>
                                                        <option value="arab">Arab</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Warganegara<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <select name="warga" class="form-select" id="warga">
                                                        <option selected disabled value="">- Sila Pilih Warganegara -</option>
                                                        <option value="warganegara">Warganegara</option>
                                                        <option value="bukan">Bukan Warganegara</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>No. Telefon (Bimbit)<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="phonenum" required>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Taraf Pendidikan<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <select name="pendidikan" class="form-select" id="pendidikan">
                                                        <option selected disabled value="">- Sila Pilih Taraf Pendidikan -</option>
                                                        <option value="phd">PHD</option>
                                                        <option value="master">Master</option>
                                                        <option value="ijazah">Ijazah</option>
                                                        <option value="diploma">Diploma</option>
                                                        <option value="stpm">STPM/HSC/Sijil</option>
                                                        <option value="spm">SPM/MCE</option>
                                                        <option value="pt3">PT3/PMR/SRP/LC</option>
                                                        <option value="upsr">UPSR</option>
                                                        <option value="tiadapendidikan">Tiada Pendidikan Rasmi</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Alamat Dalam K/P<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <textarea type="text" class="form-control form-control-sm" id="alamatstyle" name="address" rows="3" required></textarea>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Alamat Semasa<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <textarea type="text" class="form-control form-control-sm" id="alamatstyle" name="currentaddress" rows="3" required></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Sektor Pekerjaan<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <select name="pekerjaan" class="form-select" id="pekerjaan">
                                                        <option selected disabled value="">- Sila Pilih Warganegara -</option>
                                                        <option value="awam">Sektor Awam</option>
                                                        <option value="swasta">Sektor Swasta</option>
                                                        <option value="sendiri">Bekerja Sendiri</option>
                                                        <option value="pesara">Pesara</option>
                                                        <option value="tidakbekerja">Tidak Bekerja</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Alamat Tempat Kerja<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <textarea type="text" class="form-control form-control-sm" id="alamatstyle" name="jobaddress" rows="3" required></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="btn-block d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary" href="m1_addpengguna.php">Kemas Kini</button>
                        </div>
                    </form>
                </div>
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