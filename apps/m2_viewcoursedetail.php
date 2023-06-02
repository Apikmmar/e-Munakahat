<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Munakahat</title>
    <link rel="shortcut icon" href="assets/img/jata-pahang.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/module2.css">

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
                <img src="assets/img/jata-pahang.png" alt="jata-pahang" class="imglogo-upper-interface">
                <img src="assets/img/Logo-KPM-BI-font-putih.png" alt="logo-persekutuan-malaysia" class="img-upper-interface">
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
                <span class="h6 text-uppercase">DAFTAR KURSUS >> PAPAR LANJUT</span>
            </div>
            <div class="content-of-module">
                <div class="d-flex flex-row">
                    <div id="vcdlabeldiv">
                        <p class="vcdlabel">Anjuran</p>
                        <br>
                        <p class="vcdlabel">Tempat</p>
                        <br>
                        <p class="vcdlabel">Tarikh</p>
                        <br>
                        <p class="vcdlabel">Masa</p>
                        <br>
                        <p class="vcdlabel">Kapasiti Peserta</p>
                        <br>
                        <p class="vcdlabel">Siri Taklimat</p>
                        <br>
                        <p class="vcdlabel">Pegawai Dihubungi</p>
                        <br>
                        <p class="vcdlabel">No Telefon</p>
                        <br>
                    </div>
                    <div id="vcdlabeldiv" style="padding-left: 0px;">
                        <p class="vcdlabel">:</p>
                        <br>
                        <p class="vcdlabel">:</p>
                        <br>
                        <p class="vcdlabel">:</p>
                        <br>
                        <p class="vcdlabel">:</p>
                        <br>
                        <p class="vcdlabel">:</p>
                        <br>
                        <p class="vcdlabel">:</p>
                        <br>
                        <p class="vcdlabel">:</p>
                        <br>
                        <p class="vcdlabel">:</p>
                        <br>
                    </div>
                </div>
                <br>
                <div class="d-flex justify-content-center">
                    <div style="padding-left: 150px;">
                        <button class="btn btn-primary" id="backtosearchkursus">Kembali</button>
                    </div>
                </div>
                <br>
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