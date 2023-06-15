<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require_once '../../Business_Service/Controller/ManageIncentiveApplication/UserManageIncentiveApplicationController.php';
$_SESSION['pendapatanpasangan'] = $_POST['pendapatanpasangan'];
$_SESSION['tempatlahirpasangan'] = $_POST['tempatlahirpasangan'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Munakahat</title>
    <link rel="shortcut icon" href="../assets/img/jata-pahang.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/css/module5.css">

</head>

<body>
    <div class="overlay">
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white justify-content-center">
            <div class="position-sticky">
                <br>
                <div class="p-2 mb-1 bg-info text-white">
                    <div class="userdata">
                        <span>ID :<p></p></span>
                        <span>Nama :<p></p></span>
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
                        <button class="btn btn-dark h6">Keluar</button>
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
                <span class="h6 text-uppercase">Mohon Bantuan Insentif (Maklumat lain-lain)</span>
            </div>
            <div class="content-of-module">
                <div id="custalign">
                    <form action="m5_userInputHeirInformation.php" method="post">
                        <div>
                            <div id="inputformpadding">
                                <em>Ruangan yang bertanda [<span class="red-asterisk">*</span>] adalah WAJIB diisi</em>
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <div id="inputformpadding">
                                        <label>Perkerjaan Pemohon <span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" value="PETRONAS OIL AND GAS" disabled>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Jenis Pekerjaan <span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm"  value="Swasta" disabled>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Pendapatan Pemohon <span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm"  value="RM4500.00" disabled>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Alamat & alamat Majikan/Premis Perniagaan <span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" value="LOT 2475, GM 5709, MUKIM PAKA DAERAH DUNGUN, 23100 KUALA TERENGGANU, TERENGGANU" disabled>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Nama Waris <span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" id="namawaris" name="namawaris"
                                            placeholder="Masukkan nama waris" required>
                                    </div>
                                    <div class="d-flex justify-content-between" id="inputformpadding">
                                        <div>
                                            <label>Hubungan <span class="red-asterisk">*</span>:</label><br>
                                            <input type="text" class="form-control form-control-sm" id="hubunganwaris" name="hubunganwaris"
                                                placeholder="Masukkan hubungan" required>
                                        </div>
                                        <div>
                                            <label>No Tel Waris <span class="red-asterisk">*</span>:</label><br>
                                            <input type="text" class="form-control form-control-sm" id="notelwaris" name="notelwaris"
                                                placeholder="Masukkan no tel waris" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <input type="checkbox" value="agree" required>
                                <p style="display: inline;">Saya mengaku dengan nama Allah S.W.T bahawa saya telah bermastautin di Negeri Pahang lebih 10 TAHUN dan semua keterangan yang telah diberikan adalah benar. Pihak kerajaan Negeri Atau Jabatan Agama Islam Pahang berhak menolah permohonan saya ini sekiranya maklumat/keterangan yang diberikan adalah TIDAK BENAR.</p>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-around" style="width: 300px;">
                            <button type="btn" id="backtoinputpartnerinfo" class="btn btn-primary">Kembali</button>
                            <button type="submit" name="Submit" value="Simpan" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/javascript.js" defer></script>
    <script src="../assets/js/module5js.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['namawaris']) && isset($_POST['hubunganwaris']) && isset($_POST['notelwaris'])) {
        $namawaris = $_POST['namawaris'];
        $hubunganwaris = $_POST['hubunganwaris'];
        $notelwaris = $_POST['notelwaris'];
        $pendapatanpasangan = $_SESSION['pendapatanpasangan'];
        $tempatlahirpasangan = $_SESSION['tempatlahirpasangan'];
        $tempatlahir = $_SESSION['tempatlahir'];
        $akuanbank = $_SESSION['akuanbank'];
        $namabank = $_SESSION['namabank'];
        $applydate = date("d-m-Y");
        $User_IC = "011221060079";
        $Staff_IC = "111221060079";
        $status = "Dalam Proses";
        $DI_ICCopy = "ICCopy";
        $DI_AkadNikahCopy = "AkadNikahCopy";
        $DI_BankAccountCopy = "DI_BankAccountCopy";
        $DI_SupportDocument = "DI_SupportDocument";
        

        $db = new IncentiveApplication();
        $db->userIA_create($applydate, $status, $akuanbank, $namabank, $tempatlahir, $tempatlahirpasangan,$pendapatanpasangan, $User_IC,$Staff_IC,$DI_ICCopy,$DI_AkadNikahCopy,$DI_BankAccountCopy,$DI_SupportDocument,$namawaris,$hubunganwaris,$notelwaris);
        $db->closeConnection();
    }
}
?>