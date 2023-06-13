<?php
    session_start();
    include('../database/connection.php');
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
                        <span>Nama :<p></p></span>
                        <span>Akses :<p></p></span>
                        <span>Jabatan :<p></p></span>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <div class="list-group" style="width: 16rem;">
                        <button class="btn btn-secondary h6">Laman Utama</button>
                        <button class="btn btn-success h6">Profil</button>
                        <button class="btn btn-success h6">Kursus Pra Perkahwinan</button>
                        <button class="btn btn-success h6">Kebenaran Berkahwin</button>
                        <button class="btn btn-success h6">Pendaftaran Nikah</button>
                        <button class="btn btn-success h6">Khidmat Nasihat</button>
                        <button class="btn btn-success h6">Insentif Khas Pasangan Pengantin</button>
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
        <div class="content-admin">
            <div class="p-2 mb-2 bg-success text-white">
                <span class="h6 text-uppercase">content</span>
            </div>
            <div class="content-of-module-admin">
                <form action="../Business_Service/Controller/StaffMarriageApplicationController.php" method="post">
                    <div style="padding-left: 20px;">
                        <h6>MAKLUMAT PEMOHON</h6>
                        <div class="d-flex flex-row">
                            <div style="width: 600px;">
                                <div>
                                    <label>No Kad Pengenalan:</label>
                                    <p style="margin: 0; display: inline;">no ic</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Nama Pemohon:</label>
                                    <p style="margin: 0; display: inline;">nama pemohon</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Alamat Surat Menyurat:</label>
                                    <p style="margin: 0; display: inline;">alamat pemohon</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Pekerjaan:</label>
                                    <p style="margin: 0; display: inline;">work</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Sektor Pekerjaan:</label>
                                    <p style="margin: 0; display: inline;">work sector</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>No telefon(PEJABAT):</label>
                                    <p style="margin: 0; display: inline;">no fon pejabat</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Status Kahwin:</label>
                                    <p style="margin: 0; display: inline;">status kahwin</p>
                                </div>
                            </div>
                            <div style="width: 600px;">
                                <div>
                                    <label>Jantina:</label>
                                    <p style="margin: 0; display: inline;">jantina</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Tarikh Lahir:</label>
                                    <p style="margin: 0; display: inline;">dob</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>No. Telefon:</label>
                                    <p style="margin: 0; display: inline;">no fon</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Tahap pendidikan:</label>
                                    <p style="margin: 0; display: inline;">tahap pendidikan</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Kerja:</label>
                                    <p style="margin: 0; display: inline;">tahap pendidikan</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Warganegara:</label>
                                    <p style="margin: 0; display: inline;">status warganegara</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Status Islam:</label>
                                    <p style="margin: 0; display: inline;">status islam</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h6>MAKLUMAT PASANGAN PEMOHON</h6>
                        <div class="d-flex flex-row">
                            <div style="width: 600px;">
                                <div>
                                    <label>No Kad Pengenalan:</label>
                                    <p style="margin: 0; display: inline;">no ic</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Nama Pasangan:</label>
                                    <p style="margin: 0; display: inline;">nama Pasangan</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Alamat Surat Menyurat:</label>
                                    <p style="margin: 0; display: inline;">alamat pemohon</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Pekerjaan:</label>
                                    <p style="margin: 0; display: inline;">work</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Sektor Pekerjaan:</label>
                                    <p style="margin: 0; display: inline;">work sector</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>No telefon(PEJABAT):</label>
                                    <p style="margin: 0; display: inline;">no fon pejabat</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Status Kahwin:</label>
                                    <p style="margin: 0; display: inline;">status kahwin</p>
                                </div>
                            </div>
                            <div style="width: 600px;">
                                <div>
                                    <label>Jantina:</label>
                                    <p style="margin: 0; display: inline;">jantina</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Tarikh Lahir:</label>
                                    <p style="margin: 0; display: inline;">dob</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>No. Telefon:</label>
                                    <p style="margin: 0; display: inline;">no fon</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Tahap pendidikan:</label>
                                    <p style="margin: 0; display: inline;">tahap pendidikan</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Kerja:</label>
                                    <p style="margin: 0; display: inline;">tahap pendidikan</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Warganegara:</label>
                                    <p style="margin: 0; display: inline;">status warganegara</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Status Islam:</label>
                                    <p style="margin: 0; display: inline;">status islam</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h6>MAKLUMAT PERKAHWINAN</h6>
                        <div class="d-flex flex-row">
                            <div style="width: 600px; margin-top: 10px">
                                <div style="padding-top: 10px;">
                                    <label>Cadangan Tarikh Akad Nikah:</label>
                                    <p style="margin: 0; display: inline;">cadangan tarikh</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Alamat Tempat Akad Nikah:</label>
                                    <p style="margin: 0; display: inline;">maklumat perkahwinan</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Negeri:</label>
                                    <p style="margin: 0; display: inline;">maklumat perkahwinan</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Mas Kahwin:</label>
                                    <p style="margin: 0; display: inline;">maklumat perkahwinan</p>
                                </div>
                            </div>
                            <div style="width: 600px; margin-top: 10px;">
                                <div style="padding-top: 10px;">
                                    <label>No Persediaan Nikah:</label>
                                    <p style="margin: 0; display: inline;">no persedian nikah</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Kategori Nikah:</label>
                                    <p style="margin: 0; display: inline;">maklumat perkahwinan</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Negara:</label>
                                    <p style="margin: 0; display: inline;">maklumat perkahwinan</p>
                                </div>
                                <div style="padding-top: 10px;">
                                    <label>Tarikh Mohon:</label>
                                    <p style="margin: 0; display: inline;">maklumat perkahwinan</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Lulus</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="reset" class="btn btn-danger">Tolak</button>
                        </div>
                        <br>
                    </div>
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