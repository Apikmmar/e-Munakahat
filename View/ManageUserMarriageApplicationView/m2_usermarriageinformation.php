<?php
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

        if (isset($_SESSION['form_data'])) {
            $form_data = $_SESSION['form_data'];
    
            unset($_SESSION['form_data']);
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
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white justify-content-center">
            <div class="position-sticky">
                <br>
                <div class="p-2 mb-1 bg-info text-white">
                    <div class="userdata">
                        <span><?php echo "Username: $user_Name "; ?></span><br>
                        <span><?php echo "IC Number: $user_IC "; ?></span><br>
                    </div>
                </div>
                <br><br>
                <div class="d-flex justify-content-center">
                    <div class="list-group" style="width: 16rem;">
                        <button class="btn btn-primary h6" id="userloginmainpage">Profil</button>
                        <button class="btn btn-primary h6" id="userprepcoursemainpage">Permohonan Berkahwin</button>
                        <button class="btn btn-primary h6" id="usermarriagemainpage">Pendaftaran Perkahwinan</button>
                        <button class="btn btn-primary h6" id="userconsultationmainpage">Khidmat Nasihat</button>
                        <button class="btn btn-primary h6" id="userincentivemainpage">Insentif Khas Pasangan Pengantin</button>
                        <button class="btn btn-dark h6" id="Keluar" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF']; ?>?logout=true'">Keluar</button>
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
                <span class="h6 text-uppercase">PERMOHONAN BERKAHWIN >> MAKLUMAT PERKAHWINAN</span>
            </div>
            <div class="content-of-module">
                <form action="../../Business_Service/Controller/ManageMarriageApplication/UserMarriageApplicationController.php" method="post">
                    <div style="padding: 10px 0px 0px 20px;">
                        <div>
                            <h5>Maklumat Perkahwinan</h5>
                            <em>Ruangan bertanda [*] wajib diisi</em>
                            <div class="d-flex flex-row">
                                <div style="width: 600px; margin-top: 10px">
                                    <div style="padding-top: 10px;">
                                        <label>Cadangan Tarikh Akad Nikah:</label>
                                        <p style="margin: 0; display: inline;">cadangan tarikh</p>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Alamat Tempat Akad Nikah *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan alamat tempat nikah" name="MA_Address" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Negeri *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan negeri" name="MA_State" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Mas Kahwin *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan mas kahwin" name="MA_MasKahwin" required>
                                    </div>
                                </div>
                                <div style="width: 600px; margin-top: 10px;">
                                    <div style="padding-top: 10px;">
                                        <label>No Persediaan Nikah:</label>
                                        <p style="margin: 0; display: inline;">no persedian nikah</p>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Kategori Nikah *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan kategori nikah" name="MA_Category" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Negara *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan negara" name="MA_Nation" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Tarikh Mohon *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm datepicker" id="inputboxstyle" placeholder="Masukkan tarikh mohon" name="MA_ApplyDate" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: 20px;">
                            <h5>Maklumat Wali</h5>
                            <em>Sila cetak borang untuk pengesahan wali</em>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-secondary">Cetak</button>
                            <div class="d-flex flex-row">
                                <div style="width: 600px; margin-top: 10px">
                                    <div style="padding-top: 10px;">
                                        <label>Nama Wali *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Nama Wali" name="Wali_Name" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Tarikh lahir Wali *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Tarikh lahir Wali" name="Wali_DOB" required>
                                        <em>dd-mm-yyyy</em>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Umur Wali *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Umur Wali" name="Wali_Age" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>No HP Wali *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan No HP Wali" name="Wali_HP" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Tarikh Nikah Wali *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm datepicker" id="inputboxstyle" placeholder="Masukkan Tarikh Nikah Wali" name="Wali_MarriageDate" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Status Islam Wali *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan status islam" name="Wali_IslamStatus" required>
                                    </div>
                                </div>
                                <div style="width: 600px; margin-top: 10px">
                                    <div style="padding-top: 10px;">
                                        <label>Jantina Wali *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Jantina Wali" name="Wali_Gender" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Alamat Wali *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Alamat Wali" name="Wali_Address" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Hubungan Wali *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Hubungan Wali" name="Wali_Hubungan" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>No Sijil Nikah Wali *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan No Sijil Nikah Wali" name="Wali_NoSijilNikah" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Pelulus Nikah Wali *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Pelulus Nikah Wali" name="Wali_Pelulus" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: 20px;">
                            <h5>Maklumat Saksi</h5>
                            <em>Sila cetak borang untuk pengesahan saksi</em>&nbsp;&nbsp;
                            <button type="submit" class="btn btn-secondary">Cetak</button>
                            <div class="d-flex flex-row">
                                <div style="width: 600px;">
                                    <h6>Saksi 1</h6>
                                    <div style="padding-top: 10px;">
                                        <label>Nombor IC Saksi *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan No IC Saksi" name="Saksi_IC" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Nama Saksi *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Nama Saksi" name="Saksi_Name" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Alamat Saksi *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Alamat Saksi" name="Saksi_Address" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>No HP Saksi *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan No HP Saksi" name="Saksi_HP" required>
                                    </div>
                                </div>
                                <div style="width: 600px;">
                                    <h6>Saksi 2</h6>
                                    <div style="padding-top: 10px;">
                                        <label>Nombor IC Saksi *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan No IC Saksi" name="Saksi_" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Nama Saksi *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Nama Saksi" name="Saksi_" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>Alamat Saksi *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Alamat Saksi" name="Saksi_" required>
                                    </div>
                                    <div style="padding-top: 10px;">
                                        <label>No HP Saksi *:</label>&nbsp;&nbsp;&nbsp;
                                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan No HP Saksi" name="Saksi_" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: 20px;">
                            <input type="checkbox" value="agree" required>
                            <p style="display: inline;"><strong>Saya bersumpah bahawasanya segala maklumat yang telah dimasukkan adalah benar</strong></p>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <button type="" class="btn btn-primary">Simpan</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="reset" class="btn btn-danger">Reset</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="" class="btn btn-secondary" id="backtomainpage">Kembali</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" value="submit" class="btn btn-primary" id="gotouploadmarriagedoc" name="daftarperkahwinan">Daftar Kahwin</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>

    <script src="../assets/js/javascript.js" defer></script>
    <script src="../assets/js/module2js.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>