<?php
    include "connection.php";
?>

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
                <span class="h6 text-uppercase">LAMAN UTAMA</span>
            </div>
            <div class="content-of-module">
                <br>
                <div class="text-center h6">
                    <p>TERMA DAN PERATURAN KHUSUS PRA PERHAKWINAN ISLAM<br>JABATAN AGAMA ISLAM PAHANG</p>
                </div>
                <div>
                    <ol>
                        <li>Hanya peserta yang berdaftar sahaja dibenarkan menyertai kursus pada hari yang berkenaan.</li>
                        <li>Pengesahan kehadiran hendaklah dibuat pada hari kursus dan pada setiap slot yang dijalankan.</li>
                        <li><b>Penangguhan kursus</b> dibenarlan untul <b>satu kali sahaja</b> dan hendaklah <b>dibuat sekurang-kurangnya seminggu awal</b> daripada tarikh yang didaftarkan kepada satu sesi kursus yang dibuka pendaftarannya sahaja. Tiada sebarang caj dikenakan</li>
                        <li><b>Penangguhan kurang dari temph seminggu</b>, bayaran penangguhan sebanyak <b>RM40.00 akan dikenakan</b>.</li>
                        <li><b>Ketidakhaidra tanpa maklum</b> akan mengakibatkan <b>pendaftaran kursus terbatal dan yuran tidak akan dikembalikan</b>. Pendaftran baharu perlu dibuat bagi mengikuti semula kursus.</li>
                        <li>Pembatalan pemdaftaran kursus, yuran tidak akan dikembalikan</li>
                        <li>Peserta kursus hendaklah <b>berpakaian kemas, sopan dan menutup aurat</b>. Pakaian jarang dan ketat adalah dilarang sama sekali</li>
                        <li>Peserta hendaklah <b>menjaga adab dan tingkahlaku</b> serta tidak menimbulkan suasana tidak tenteram sepanjang masa kursus ini berjalan.</li>
                        <li>Peserta yang hadir ke kursus juga hendaklah mematuhi langkah-langkah keselamatan yang telah ditetapkan oleh pihak penganjur dan Pejabat Agama Islam Daerah.</li>
                        <li>Sebarang masalah hendaklah berkaitan kursus, <b>sila rujuk/maklum kepada urusetia bertugas</b>. Peserta hendaklah mematuhi segala peraturan dan arahan dari semmasa ke semasa oleh urusetia.</li>
                        <br><br>
                    </ol>
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