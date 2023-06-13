<?php
    session_start();
    require '../../database/connection.php';
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
                        <span>Username: <p></p></span><br>
                        <span>IC Number: <p></p></span><br>
                    </div>
                </div>
                <br><br>
                <div class="d-flex justify-content-center">
                    <div class="list-group" style="width: 16rem;">
                        <button class="btn btn-primary h6" id="userprepcoursemainpage">Laman Utama</button>
                        <button class="btn btn-primary h6" id="daftarcourse">Daftar Kursus</button>
                        <button class="btn btn-primary h6" id="tangguhkursus">Tangguh Kursus</button>
                        <button class="btn btn-primary h6" id="printslippermohonan">Cetak Slip Permohonan</button>
                        <button class="btn btn-dark h6" id="usermainpage">Kembali Ke e-Munakahat</button>
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
                <span class="h6 text-uppercase">DAFTAR KURSUS</span>
            </div>
            <div class="content-of-module">
                <div id="custalign">
                    <form action="../../Business_Service/Controller/UserMarriagePreparationController.php" method="post">
                        <div>
                            <div id="inputformpadding">
                                <h6 class="custcolor">Anjuran :</h6>
                                <h6 class="custcolor">Tempat dan Tarikh :</h6>
                                <em>Ruangan yang bertanda [*] adalah WAJIB diisi</em>
                            </div>
                            <div class="d-flex flex-row">
                                <div style="width: 600px">
                                    <div style="padding-top: 15px;">
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
                                            <label>Sektor Pekerjaan:</label>
                                            <p style="margin: 0; display: inline;">work sector</p>
                                        </div>
                                    </div>
                                    <div id="inputformpadding">
                                        <div>
                                            <label>Negeri:</label><br>
                                            <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan negeri" required>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>Daerah:</label><br>
                                            <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan daerah" required>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>Kebenaran jabatan agama negeri:</label><br>
                                            <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan negeri" required>
                                        </div>
                                    </div>
                                </div>
                                <div style="width: 600px">
                                    <div style="padding-top: 15px;">
                                        <div>
                                            <label>Jantina:</label>
                                            <p style="margin: 0; display: inline;">jantina</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>No. Telefon:</label>
                                            <p style="margin: 0; display: inline;">no fon</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>Tahap pendidikan:</label>
                                            <p style="margin: 0; display: inline;">tahap pendidikan</p>
                                        </div>
                                    </div>
                                    <div id="inputformpadding" style="padding-top: 35px;">
                                        <label>Resit pembayaran(RM80.00):</label><br>
                                        <input class="form-control form-control-sm" id="inputboxstyle" type="file" required>
                                    </div>
                                    <div id="inputformpadding">
                                        <div>
                                            <label>Cadangan Tarikh Akad Nikah:</label><br>
                                            <input type="text" class="form-control form-control-sm datepicker" id="inputboxstyle" placeholder="Select date" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <input type="checkbox" value="agree" required>
                                <p style="display: inline;">Saya telah membaca dan faham terma dan peraturan yang telah ditetapkan, dan bersetuju untuk menyertai <b>kursus Pra-Perkahwinan Islam Pahang</b> ini.</p>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-around" style="width: 300px;">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="btn" id="backtosearchkursus" class="btn btn-primary">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/javascript.js" defer></script>
    <script src="../assets/js/module2js.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>