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
            echo "User not found.";
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

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validate and sanitize user inputs
        $updatedname = mysqli_real_escape_string($conn, $_POST['name']);
        $updatedemel = mysqli_real_escape_string($conn, $_POST['emel']);
        $updatedbangsa = mysqli_real_escape_string($conn, $_POST['bangsa']);
        $updatedwarga = mysqli_real_escape_string($conn, $_POST['warga']);
        $updatedphonenum = mysqli_real_escape_string($conn, $_POST['phonenum']);
        $updatedpendidikan = mysqli_real_escape_string($conn, $_POST['pendidikan']);
        $updatedaddress = mysqli_real_escape_string($conn, $_POST['address']);
        $updatedcurrentaddress = mysqli_real_escape_string($conn, $_POST['currentaddress']);
        $updatedpekerjaan = mysqli_real_escape_string($conn, $_POST['pekerjaan']);
        $updatedjobaddress = mysqli_real_escape_string($conn, $_POST['jobaddress']);

        // Update the complaint in the database
        $updateSql = "UPDATE user_registration_info SET User_Name = '$updatedname', User_Email = '$updatedemel', User_Race = '$updatedbangsa', User_Nationality = '$updatedwarga', User_HP = '$updatedphonenum', User_Edu = '$updatedpendidikan', User_AddressInIC = '$updatedaddress', User_Address = '$updatedcurrentaddress', User_JobSector = '$updatedpekerjaan', User_JobAddress = '$updatedjobaddress' WHERE User_IC = $icnum";

        if ($conn->query($updateSql) === true) {
            echo "Complaint updated successfully.";
            header("Location: m1_manageUserProfile.php");
            // You can redirect the user to a different page or display a success message here
        } else {
            echo "Error updating user: ";
            // You can handle the error scenario as per your requirements
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
                        <span>ID : <p></p></span>
                        <span>Nama : <?php echo $name; ?><p></p></span>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="list-group" style="width: 16rem;">
                        <button class="btn btn-primary h6" id="userloginmainpage" onclick="window.location.href='m1_manageUserProfile.php'">Profil</button>
                        <button class="btn btn-primary h6" id="userprepcoursemainpage">Kursus Pra-Perkahwinan</button>
                        <button class="btn btn-primary h6" id="marriageapply">Permohonan Berkahwin</button>
                        <button class="btn btn-primary h6" id="usermarriagemainpage">Pendaftaran Perkahwinan</button>
                        <button class="btn btn-primary h6" id="userconsultationmainpage">Khidmat nasihat</button>
                        <button class="btn btn-primary h6" id="userincentivemainpage">Insentif Khas Pasangan Pengantin</button>
                        <button class="btn btn-dark h6" id="Keluar" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>?logout=true'" >Keluar</button>
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
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="icnum"  value="<?php echo $icnum; ?>" disabled>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Emel<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="emel" value="<?php echo $emel; ?>" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none; ">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Nama<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="name" value="<?php echo $name; ?>" required>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Jantina<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="gender" value="<?php echo $gender; ?>" disabled>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Tarikh Lahir<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="dob" value="<?php echo $dob; ?>" disabled>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Umur<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="age" value="<?php echo $age; ?>" disabled>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Bangsa<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <select name="bangsa" class="form-select" id="bangsa">
                                                        <option selected disabled value="">- Sila Pilih Bangsa -</option>
                                                        <option value="Melayu" <?php if ($bangsa === "Melayu") echo 'selected'; ?>>Melayu</option>
                                                        <option value="Cina" <?php if ($bangsa === "Cina") echo 'selected'; ?>>Cina</option>
                                                        <option value="India" <?php if ($bangsa === "India") echo 'selected'; ?>>India</option>
                                                        <option value="Bangladeshi" <?php if ($bangsa === "Bangladeshi") echo 'selected'; ?>>Bangladeshi</option>
                                                        <option value="Pakistani" <?php if ($bangsa === "Pakistani") echo 'selected'; ?>>Pakistani</option>
                                                        <option value="Sri Lanka" <?php if ($bangsa === "Sri Lanka") echo 'selected'; ?>>Sri Lanka</option>
                                                        <option value="Indonesian" <?php if ($bangsa === "Indonesian") echo 'selected'; ?>>Indonesian</option>
                                                        <option value="Bumiputera Sabah" <?php if ($bangsa === "Bumiputera Sabah") echo 'selected'; ?>>Bumiputera Sabah</option>
                                                        <option value="Bumiputera Sarawak"<?php if ($bangsa === "Bumiputera Sarawak") echo 'selected'; ?>>Bumiputera Sarawak</option>
                                                        <option value="Orang Asli (Semenanjung)" <?php if ($bangsa === "Orang Asli (Semenanjung)") echo 'selected'; ?>>Orang Asli (Semenanjung)</option>
                                                        <option value="Lain-lain Asia" <?php if ($bangsa === "Lain-lain Asia") echo 'selected'; ?>>Lain-lain Asia</option>
                                                        <option value="European" <?php if ($bangsa === "European") echo 'selected'; ?>>European</option>
                                                        <option value="Arab" <?php if ($bangsa === "Arab") echo 'selected'; ?>>Arab</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Warganegara<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <select name="warga" class="form-select" id="warga">
                                                        <option selected disabled value="">- Sila Pilih Warganegara -</option>
                                                        <option value="Warganegara" <?php if ($warga === "Warganegara") echo 'selected'; ?>>Warganegara</option>
                                                        <option value="Bukan Warganegara" <?php if ($warga === "Bukan Warganegara") echo 'selected'; ?>>Bukan Warganegara</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>No. Telefon (Bimbit)<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <input type="text" class="form-control form-control-sm" id="alamatstyle" name="phonenum" value="<?php echo $phonenum; ?>" required>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Taraf Pendidikan<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <select name="pendidikan" class="form-select" id="pendidikan">
                                                        <option selected disabled value="">- Sila Pilih Taraf Pendidikan -</option>
                                                        <option value="PHD" <?php if ($pendidikan === "PHD") echo 'selected'; ?>>PHD</option>
                                                        <option value="Master" <?php if ($pendidikan === "Master") echo 'selected'; ?>>Master</option>
                                                        <option value="Ijazah" <?php if ($pendidikan === "Ijazah") echo 'selected'; ?>>Ijazah</option>
                                                        <option value="Diploma" <?php if ($pendidikan === "Diploma") echo 'selected'; ?>>Diploma</option>
                                                        <option value="STPM/HSC/Sijil" <?php if ($pendidikan === "STPM/HSC/Sijil") echo 'selected'; ?>>STPM/HSC/Sijil</option>
                                                        <option value="SPM/MCE" <?php if ($pendidikan === "SPM/MCE") echo 'selected'; ?>>SPM/MCE</option>
                                                        <option value="PT3/PMR/SRP/LC" <?php if ($pendidikan === "PT3/PMR/SRP/LC") echo 'selected'; ?>>PT3/PMR/SRP/LC</option>
                                                        <option value="UPSR" <?php if ($pendidikan === "UPSR") echo 'selected'; ?>>UPSR</option>
                                                        <option value="Tiada Pendidikan Rasmi" <?php if ($pendidikan === "Tiada Pendidikan Rasmi") echo 'selected'; ?>>Tiada Pendidikan Rasmi</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Alamat Dalam K/P<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <textarea type="text" class="form-control form-control-sm" id="alamatstyle" name="address" rows="3" required><?php echo $address; ?></textarea>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Alamat Semasa<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <textarea type="text" class="form-control form-control-sm" id="alamatstyle" name="currentaddress" rows="3" required><?php echo $currentaddress; ?></textarea>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Sektor Pekerjaan<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <select name="pekerjaan" class="form-select" id="pekerjaan">
                                                        <option selected disabled value="">- Sila Pilih Sektor Pekerjaan -</option>
                                                        <option value="Sektor Awam" <?php if ($pekerjaan === "Sektor Awam") echo 'selected'; ?>>Sektor Awam</option>
                                                        <option value="Sektor Swasta" <?php if ($pekerjaan === "Sektor Swasta") echo 'selected'; ?>>Sektor Swasta</option>
                                                        <option value="Bekerja Sendiri" <?php if ($pekerjaan === "Bekerja Sendiri") echo 'selected'; ?>>Bekerja Sendiri</option>
                                                        <option value="Pesara" <?php if ($pekerjaan === "Pesara") echo 'selected'; ?>>Pesara</option>
                                                        <option value="Tidak Bekerja" <?php if ($pekerjaan === "Tidak Bekerja") echo 'selected'; ?>>Tidak Bekerja</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td style="border:none;">
                                                <div class="inputformpadding" >
                                                    <label><b>Alamat Tempat Kerja<span class="red-asterisk">*</span>:</b></label><br><br>
                                                    <textarea type="text" class="form-control form-control-sm" id="alamatstyle" name="jobaddress" rows="3" required><?php echo $jobaddress; ?></textarea>
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
                            <button type="submit" class="btn btn-primary">Kemas Kini</button>
                        </div>
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