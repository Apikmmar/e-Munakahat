<!DOCTYPE html>
<html lang="en">

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
                <img src="../assets/img/Logo-KPM-BI-font-putih.png" alt="logo-persekutuan-malaysia"
                    class="img-upper-interface">
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
                <span class="h6 text-uppercase">Bantuan Insentif Khas</span>
            </div>
            <div class="content-of-module">
                <br>
                <div class="text-center h6">
                    <p><b>SYARAT KELAYAKAN INSENTIF KHAS PASANGAN PENGANTIN YANG BERDAFTAR DI NEGERI PAHANG<br>JABATAN
                            AGAMA ISLAM PAHANG</b></p>
                </div>
                <div>
                    <ol>
                        <li>Insentif ini disediakan untuk pasangan yang <b>pengantin lelakinya berpendapatan RM5000.00
                                dan
                                ke bawah</b> tertakluk kepada syarat-syarat dan garis panduan yang ditentukan.</li>
                        <li>Hanya <b>anak-anak Pahang sahaja</b> yang layak menerima insentif ini.</li>
                        <li>Samada pengantin lelaki atau perempuan mestilah <b>anak kelahiran Negeri Pahang.</b></li>
                        <li>Pasangan pengantin yang mana pengantin lelaki sahaja <b>berpendapatan RM5000.00 dan ke bawah
                                layak menerima insentif</li>
                        <li>Bagi perkahwinan di luar negeri Pahang, pengantin lelaki mestilah <b>anak kelahiran
                                Pahang</b>.</li>
                        <li>Perkahwinan ini mestilah <b>didaftarkan di Negeri Pahang</b> dengan Kebenaran Pejabat Agama
                            Islam
                            Daerah.</li>
                        <li>Perkahwinan anak Pahang yang didaftarkan di luar negeri Pahang,pengantin perlu membuat
                            permohonan dan pengesahan di Pejabat Agama Islam (dimana tempat permohonan).</li>
                        <li>Bagi pemastautin di negeri Pahang sekurang-kurangnya 10 tahun atau lebih, perlu mendapatkan
                            <b>pengesahan dari Penghulu/ADUN Kawasan/pengurus FELDA/Imam Qaryah atau Penyelaras</b>.
                        </li>
                        <li>Duda atau Janda atau salah seorang yang mana pasangannya adalah anak negeri Pahang dan
                            berkelayakan, perkahwinan kali pertama dengan pasangan yang lain, layak untuk menerima
                            insentif.</li>
                    </ol>
                </div>
                <div class="text-center h6">
                    <p>ANDA TIDAK LAYAK SEKIRANYA :</p>
                </div>
                <div>
                    <ol>
                        <li>Poligami</li>
                        <li>Nikah semula ( pasangan yang sama selepas tamat tempoh iddah )</li>
                        <li>Nikah tanpa kebenaran</li>
                        <li>Kedua pasangan bukan asal Pahang</li>
                        <li>Pendapatan lelaki melebihi RM5,000.00</li>
                        <br>
                    </ol>
                </div>
                <div class="container">
                    <button type="btn" id="backtousermainpage" class="btn btn-primary">Kembali</button>
                    <br><br>
                </div>
            </div>

            <script src="../assets/js/javascript.js" defer></script>
            <script src="../assets/js/module5js.js" defer></script>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
                crossorigin="anonymous"></script>
</body>

</html>