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
  <link rel="shortcut icon" href="img/jata-pahang.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="assets/css/module3.css">

</head>

<body>
  <div class="overlay">
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white justify-content-center">
      <div class="position-sticky">
        <br>
        <div class="p-2 mb-1 bg-info text-white">
          <div class="userdata">
            <span>
              <p>ID : 011023000000</p>
            </span>
            <span>
              <p>Nama : ALI</p>
            </span>
          </div>
        </div>
        <br><br>
        <div class="d-flex justify-content-center">
          <div class="list-group" style="width: 16rem;">
            <button class="btn btn-primary h6" id="Profil">Profil</button>
            <button class="btn btn-primary h6" id="KursusPraPerkahwinan">Kursus Pra-Perkahwinan</button>
            <button class="btn btn-primary h6" id="PermohonanBerkahwin">Permohonan Berkahwin</button>
            <button class="btn btn-dark h6" id="PendaftaranPerkahwinan">Pendaftaran Perkahwinan</button>
            <button class="btn btn-primary h6" id="KhidmatNasihat">Khidmat nasihat</button>
            <button class="btn btn-primary h6" id="insentifKhas">insentif Khas</button>
            <button class="btn btn-primary h6" id="Keluar">Keluar</button>
          </div>
        </div>
      </div>
    </nav>

    <!-- navbar -->
    <nav class="p-1 mb-1 bg-primary text-white justify-content-center fixed-top">
      <div class="h-span-container">
        <button class="navbar-button" id="hey">&#9776;</button>
        <h4 class=".float-start">e-Munakahat</h4>
        <img src="img/jata-pahang.png" alt="jata-pahang" class="imglogo-upper-interface">
        <img src="img/Logo-KPM-BI-font-putih.png" alt="logo-persekutuan-malaysia" class="img-upper-interface">
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
        <span class="h6 text-uppercase">Pendaftaran Perkahwinan > Daftar Baru</span>
      </div>


      <!-- slip permohonan online , blh click button borang 4,5 untuk jump ke content tu-->
      <div class="content-of-module">
        <div style="padding: 20px 0px 20px 6px">

          <button class=" btn btn-primary"><a href="#slip">
              <h6 style="color:aliceblue;">Slip Permohonan Online</h6>
            </a></button>
          <button class=" btn btn-primary"><a href="#borang4">
              <h6 style="color:aliceblue;">Persetujuan Dan Wakalah Wali (Borang 4)</h6>
            </a></button>
          <button class=" btn btn-primary"><a href="#borang5">
              <h6 style="color:aliceblue;">Catatan Akad Nikah (Borang 5)</h6>
            </a></button>
          <button class=" btn btn-primary"><a href="#senarai">
              <h6 style="color:aliceblue;">Senarai Semak</h6>
            </a></button>


          <!-- downloadFile -->
          <button onclick="downloadFile()"><img class=" img-printer " src=" img/printer.png" alt="print not function"></button>

          <script>
            function downloadFile() {
              var filename = 'Borang Pendaftaran Nikah.php';
              var content = 'Slip Pendaftaran Perkahwinan ';

              var element = document.createElement('a');
              element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(content));
              element.setAttribute('download', filename);

              element.style.display = 'none';
              document.body.appendChild(element);

              element.click();

              document.body.removeChild(element);
            }
          </script>
        </div>
      </div>


      <div class="content-of-module">
        <div class="p-2 mb-2 bg-info text-white">
          <h5 id="slip">Slip Pendaftaran Perkahwinan</h5>
        </div>
        <div class="p-2 mb-2 bg-secondary text-white"><b>Maklumat Pemohon</b></div>
        <div style="padding: 0px 0px 0px 7px">
          <span>
            <!-- &nbsp; for blank space-->
            <p><b>No.Kad Pengenalan :</b> 011023000000 &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Umur : </b>21 Tahun</p>
            <p><b>Nama Pemohon :</b> ALI BIN ABU &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Bangsa : </b>Melayu</p>
            <p><b>Tarikh Lahir :</b> 23-10-2001 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Warganegara : </b>WARGANEHARA</p>
            <p><b>Taraf Pendidikan :</b> IJAZAH &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>No.Telefon : </b>01112345678</p>
            <p><b>Sektor Pekerjaan :</b> SEKTOR AWAM</p>
            <p><b>Pekerjaan/ Jawatan :</b> KEJURUTERAAN PERISIAN</p>
            <p><b>Pendapatan :</b> RM 20000.00 </p>
            <p><b>Alamat :</b> 333,TAMAN SDW,JALAN 12,26600,KUANTAN,PAHANG</p>
            <p><b>Status Sebelum Perkahwinan :</b> TERUNA</p>

          </span>
        </div>

        <div class="p-2 mb-2 bg-secondary text-white"><b>Maklumat Pasangan</b></div>
        <div style="padding: 0px 0px 0px 7px">
          <span>
            <p><b>No.Kad Pengenalan :</b> 011023000002 &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Umur : </b>21 Tahun</p>
            <p><b>Nama Pemohon :</b> ALIYA BINTI ABDUL &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Bangsa : </b>Melayu</p>
            <p><b>Tarikh Lahir :</b> 23-10-2001 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Warganegara : </b>WARGANEGARA</p>
            <p><b>Taraf Pendidikan :</b> IJAZAH &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>No.Telefon : </b>0111234567</p>
            <p><b>Sektor Pekerjaan :</b> SEKTOR AWAM</p>
            <p><b>Pekerjaan/ Jawatan :</b> KEJURUTERAAN PERISIAN</p>
            <p><b>Pendapatan :</b> RM 20000.00 </p>
            <p><b>Alamat :</b> 55,TAMAN SDW,JALAN 12,26600,KUANTAN,PAHANG</p>
            <p><b>Status Sebelum Perkahwinan :</b>TERUNA</p>

          </span>
        </div>

        <div class="p-2 mb-2 bg-secondary text-white"><b>Maklumat Perkahwinan</b></div>
        <div style="padding: 0px 0px 0px 7px">
          <span>
            <p><b>Nama Pemohon :</b> ALI BIN ABU &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Mas Kahwin : </b>RM22.50</p>
            <p><b>Nama Pemohon :</b> ALIYA BINTI ABDUL &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Hantaran : </b>RM2000</p>
            <p><b>Tarikh Mohon :</b> 23-3-2023 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Pemberian lain : </b>-</p>
          </span>
        </div>

        <div class="p-2 mb-2 bg-secondary text-white"><b>Maklumat Cadangan Majlis Akad Nikah</b></div>
        <div style="padding: 0px 0px 0px 7px">
          <span>
            <p><b>Tarikh Akad Nikah :</b> 23-5-2023 &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>Tempat Kahwin</u></b></p>
            <p><b>Alamat Tempat Kahwin :</b> KUANTAN &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<b>Negara : </b>MALAYSIA</p>
            <p><b>Jenis Mas Kahwin :</b> TUNAI &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Negeri : </b>PAHANG</p>
          </span>
        </div>

        <div class="p-2 mb-2 bg-secondary text-white"><b>Maklumat Wali</b></div>
        <div style="padding: 0px 0px 0px 7px">
          <span>

            <p><b>No.Kad Pengenalan Wali :</b> 710420070001 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Umur Wali : </b>59 Tahun</p>
            <p><b>Nama Wali :</b> ABDUL BIN SALI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>No.Telefon Wali : </b>0112345678</p>
            <p><b>Tarikh Lahir Wali :</b> 20-04-1971 &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Alamat Wali : </b>KUANTAN,PAHANG</p>
            <br>
            <p><b>Hubungan :</b> Bapa</p>
            <p><b>Tarikh Nikah Ibu Bapa :</b> 3-9-1993</p>
            <p><b>No.Sijil Nikah Ibu Bapa :</b> KTN01213</p>
            <br>
            <p><b>Persetujuan Dan Pengakuan Wali :</b></p>
            <p style="width:1100px">Saya ,Dengan ini,Sesungguhnya Bersetuju Terhadap Perkahwinan Yang Dicadangkan Ini Dan Saya Sesungguhnya Mengaku Bahawa Segala Maklumat Yang Terkandung Di (Maklumat Wali) Adalah Benar Dan Sekiranya Maklumat Ini Palsu,Maka Saya Boleh Didakwa Dan Disabitkan Di Bawah Seksyen 38 Enakmen Undang-Undang Keluarga Islam 2005.</p>

            <p class="float-hub;padding: 0px 0px 0px 7px"><b>Tarikh : </b><input type="date" id="start" name="waliDate" value="2023-01-01" min="2023-06-01" max="2023-12-31"></p>
            <br>
            <p class="float-hub;padding: 0px 0px 0px 9px"><b>..................................<br>(Tandatangan Wali)</b></p>
          </span>
        </div>

        <div class="p-2 mb-2 bg-secondary text-white"><b>Maklumat Saksi</b></div>
        <div style="padding: 0px 0px 0px 7px">
          <span>
            <p><b>Nama Saksi 1 :</b> SITI BINTI AHMAD </p>
            <p><b>No.Kad Pengenalan Saksi 1 :</b> 980902079383</p>
            <p><b>No.Telefon Saksi 1 :</b> 016263748532</p>
            <p><b>Alamat Saksi 1 :</b> 55 ,TAMAN TEJA PAHANG</p>
            <br>
            <p><b>Nama Saksi 2 :</b> SHAIRUL BIN GUHDEF</p>
            <p><b>No.Kad Pengenalan Saksi 2 :</b> 670902947222</p>
            <p><b>No.Telefon Saksi 2 :</b> 012324654784</p>
            <p><b>Alamat Saksi 2 :</b> 34, TAMAN MEGA PAHANG</p>
            <br>
            <p><b>Pengakuan Saksi :</b></p>
            <p style="width:1100px ">Kami sesungguhnya mengaku bahawa segala maklumat yang dinyatakan dalam borang ini adalah benar dan sekiranya maklumat ini palsu, maka kami boleh didakwa dan disabitkan di bawah seksyen 38 enakmen undang-undang keluarge islam 2005</p>
            <br>
            <p class="float-hub;padding: 0px 0px 0px 7px"><b>Tarikh : </b><input type="date" id="start" name="saksi1Date" value="2023-01-01" min="2023-06-01" max="2023-12-31"></p>
            <br>
            <p class="float-hub;padding: 0px 0px 0px 9px"><b>......................................<br>(Tandatangan Saksi 1)</b></p>
            <br><br>
            <p class="float-hub;padding: 0px 0px 0px 7px"><b>Tarikh : </b><input type="date" id="start" name="saksi2Date" value="2023-01-01" min="2023-06-01" max="2023-12-31"></p>
            <br>
            <p class="float-hub;padding: 0px 0px 0px 9px"><b>......................................<br>(Tandatangan Saksi 2)</b></p>
          </span>
        </div>

        <div class="p-2 mb-2 bg-secondary text-white"><b>Pengakuan Pemohon</b></div>
        <div style="padding: 0px 0px 0px 7px">
          <span>
            <p>
              1. Saya dengan ini sesungguhnya mengaku bahawa saya adalah seorang :
              <br>
              &nbsp;&nbsp;&nbsp; <input type="radio" name="status" value="Teruna" checked="checked"> Teruna <input type="radio" name="status" value="Duda"> Duda <input type="radio" name="status" value="Beristeri"> Beristeri
              <input type="radio" name="status" value="Dara"> Dara <input type="radio" name="status" value="Janda"> Janda/Balu <input type="radio" name="status" value="Thayyib"> Thayyib

              <br><br>
              2. Nombor Surat perakuan cerai (jika duda/janda/balu):
              <br><br>
              &nbsp;&nbsp;&nbsp;Tarikh cerai: </b><input type="date" id="start" name="saksi1Date" min="2023-06-01" max="2023-12-31">
              <br><br>
              &nbsp;&nbsp;&nbsp;No.Sijil Kematian: <input type="text">
              <br><br>
              &nbsp;&nbsp;&nbsp;Tarikh kematian: </b><input type="date" id="start" name="saksi1Date" min="2023-06-01" max="2023-12-31">
              <br><br>
              3. Saya mengaku bahawa segala maklumat dan butiran yang dinyatakan dalam borang ini adalah benar dan sekiranya palsu, maka saya telah melakukan satu kesalahan dan boleh disabitkan di bawah seksyen 38 enakmen undang-undang keluarga islam 2005.
            </p>


            <p class="float-hub;padding: 0px 0px 0px 7px"><b>Tarikh : </b><input type="date" id="start" name="saksi1Date" value="2023-01-01" min="2023-06-01" max="2023-12-31"></p>
            <br>
            <p class="float-hub;padding: 0px 0px 0px 9px"><b>..........................................<br>(Tandatangan Pemohon)</b></p>
            <br><br>
            <p class="float-hub;padding: 0px 0px 0px 7px"><b>Di Hadapan Saya,</b></p>
            <br>
            <p class="float-hub;padding: 0px 0px 0px 9px"><b>................................................................<br>(Tandatangan Pendaftar/Penolong <br> Pendaftar/Jurunikah Dan Cap Rasmi)</b></p>
          </span>
        </div>
      </div>


      <!-- borang 4 -->
      <div class="content-of-module">
        <div class="p-2 mb-2 bg-info text-white">
          <h5 id="borang4">Persetujuan Dan Wakalah Wali (Borang 4)</h5>
        </div>
        <div class="p-2 mb-2 bg-secondary text-white"><b>Persetujuan Wali</b></div>
        <div style="padding: 0px 0px 0px 7px">
          <span>
            <p style="width:1100px ">Saya <b id="blue">Abdul Bin Sali</b> No.kad pengenalan <b id="blue">710420070001</b> adalah Bapa kepada <b id="blue">Aliyah binti abdul</b> dengan
              ini membuat pengakuan bahawa saya bersetuju dengan perkahwinan di antara <b id="blue">Aliyah binti abdul</b>
              dengan <b id="blue">Ali Bin Abu</b> dengan Mas kahwinnya <b id="blue"> Rm 20000.00</b> <br>
              Saya akan mengakad nikahkan sendiri perkahwinan ini.</p>
            <br>
            <p class="float-hub;padding: 0px 0px 0px 7px"><b>Tarikh : </b><input type="date" id="start" name="waliDate" value="2023-01-01" min="2023-06-01" max="2023-12-31"></p>
            <br>
            <p class="float-hub;padding: 0px 0px 0px 9px"><b>..................................<br>(Tandatangan Wali)</b></p>
          </span>
        </div>

        <div class="p-2 mb-2 bg-secondary text-white"><b>Wakalah Wali</b></div>
        <div style="padding: 0px 0px 0px 7px">
          <p style="width:1100px ">Saya <input type="text"> No.kad pengenalan <input type="text"> adalah <input type="text"> kepada <b id="blue">Aliyah binti abdul</b> <br><br> dengan ini mewakilikan kepada <input type="text"> No.kad pengenalan <input type="text"> sebagai <input type="text"> <br><br>(Jawatan)untuk mengakadnikahkan <input type="text"> (Hubungan) Saya <b id="blue">Ali Bin Abu</b> dengan Mas kahwinnya <b id="blue">Rm 20000.00</b></p>
          <br>
          <p class="float-hub;padding: 0px 0px 0px 7px"><b>Tarikh : </b><input type="date" id="start" name="waliDate" value="2023-01-01" min="2023-06-01" max="2023-12-31"></p>
          <br>
          <p class="float-hub;padding: 0px 0px 0px 9px"><b>..............................<br>(Tandatangan Wali)</b></p><br>
          <p class="float-hub;padding: 0px 0px 0px 7px">Saya dengan ini menerima wakalah wali di atas,</p>
          <br>
          <p class="float-hub;padding: 0px 0px 0px 9px"><b>..............................................<br>(Tandatangan Penerima Wali)</b></p>

          </span>
        </div>


        <div class="p-2 mb-2 bg-secondary text-white"><b>Saksi Wakalah Wali</b></div>
        <div>

          <p><b>Nama Saksi 1 :</b> SITI BINTI AHMAD </p>
          <p><b>No.Kad Pengenalan Saksi 1 :</b> 980902079383</p>
          <p><b>No.Telefon Saksi 1 :</b> 016263748532</p>
          <p><b>Alamat Saksi 1 :</b> 55 ,TAMAN TEJA PAHANG</p>
          <p style=" float:left class;padding: 0px 0px 0px 0px"><b>Tarikh : </b><input type="date" id="start" name="saksi1Date" value="2023-01-01" min="2023-06-01" max="2023-12-31"></p>
          <br>
          <p style="float:left class;padding: 0px 0px 0px 9px"><b>......................................<br>(Tandatangan Saksi 1)</b></p>
          <br><br>

          <p><b>Nama Saksi 2 :</b> SHAIRUL BIN GUHDEF</p>
          <p><b>No.Kad Pengenalan Saksi 2 :</b> 670902947222</p>
          <p><b>No.Telefon Saksi 2 :</b> 012324654784</p>
          <p><b>Alamat Saksi 2 :</b> 34, TAMAN MEGA PAHANG</p>
          <p class="float-hub;padding: 0px 0px 0px 7px"><b>Tarikh : </b><input type="date" id="start" name="saksi2Date" value="2023-01-01" min="2023-06-01" max="2023-12-31"></p>
          <br>
          <p class="float-hub;padding: 0px 0px 0px 9px"><b>......................................<br>(Tandatangan Saksi 2)</b></p>
          <br>
        </div>

        <div class="p-2 mb-2 bg-secondary text-white"><b>Pengesahan Wakalah Wali</b></div>
        <div style="padding: 0px 0px 0px 7px">
          <span>
            <p style="width:1100px ">Saya <input type="text"> mengesahkan bahawa wakalah wali di atas adalah dibuat di hadapan saya di <input type="text"> dan ia mengikut kehendak hukum syarak </p>
            <br>
            <p class="float-hub;padding: 0px 0px 0px 7px"><b>Tarikh : </b><input type="date" id="start" name="waliDate" value="2023-01-01" min="2023-06-01" max="2023-12-31"></p>
            <br>
            <p class="float-hub;padding: 0px 0px 0px 9px"><b>...........................................<br>(Tandatangan Pendaftar dan Cap Rasmi)</b></p><br>
          </span>
        </div>
      </div>


      <!-- borang5-->
      <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
      <div class="content-of-module">
        <div class="p-2 mb-2 bg-info text-white">
          <h5 id="borang5">Catatan Akad Nikah (Borang 5)</h5>
        </div>
        <div class="p-2 mb-2 bg-secondary text-white"><b>Surat Perakuan Nikah</b></div>
        <div style="padding: 0px 0px 0px 7px">
          <span>

            <p style="width:1100px">
              Nombor <b id="blue">180/89</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tarikh Akad Nikah H/M <b id="blue">5.2.2023</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nombor Kebenaran Berkahwin <b id="blue"> 47/89</b>
              <br>
              Tarikh Didaftar H/M <b id="blue">30.2.2023</b>
              <br><br>
              Nama pengantin lelaki <b id="blue">Ali Bin Abu</b>
              <br>
              umur <b id="blue">21</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.kad pengenalan <b id="blue"> 011111110111</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat <b id="blue">333, Taman teja Kuantan ,pahang.</b>
              <br><br>

              Nama pengantin Perempuan <b id="blue">Aliya Binti Abdul</b>
              <br>
              umur <b id="blue">21</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No.kad pengenalan <b id="blue">010222020220</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat <b id="blue">55, Taman teja Kuantan ,pahang.</b>
              <br><br>

              Nama Wali <b id="blue">Abdul Bin Sali</b>
              <br>
              Umur <b id="blue">57 </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No.kad Pengenalan 710430071611 <b id="blue">710430071611 </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alamat <b id="blue">55, Taman teja Kuantan ,pahang</b>
              <br>
              Perhubungan <b id="blue">Bapa</b>
              <br><br>
              Nama Saksi <br>
              (1) <b id="blue">Siti Binti Ahmad</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;no.kad pengenalan <b id="blue">980902079382</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Umur <b id="blue">28</b><br>
              Alamat <b id="blue">55, Taman teja Kuantan ,pahang</b><br><br>
              (2) <b id="blue">Shairul Bin Gurhrnw</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;no.kad pengenalan <b id="blue">681028079821</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Umur <b id="blue">28</b><br>
              Alamat <b id="blue">34,Taman mega Jalan 20,Pahang</b><br>
              <br>
              mas kahwin <b id="blue">22.50 ringgit tunai</b><br>
              Belanja hantaran <b id="blue">20000 ringgit</b>
            </p>
            <p style="width:1100px ">
              <b id="blue">Pengantin lelaki telah berta’liq seperti berikut:</b> <br>
              Saya mengaku apabila saya tinggalkan isteri saya <b id="blue">Aliya Binti Abdul</b> selama empat bulan hijrah berturut-turut atau lebih dengan sengaja atau paksaan ,dan saya atau wakil saya tiada memberi nafkah kepadanya selama tempoh masa saya yang tersebut pada hal ia taatkan saya atau saya melakukan sebarang mudarat kepada tubuh badannya,kemudian ia mengadu kepada mahkamah syariah dan apabila sabit aduannya di sisi mahkamah syariah dan ia memberi kepada mahkamah syariah yang menerima bagi pihak saya satu ringgit maka pada ketika itu tertalaq ia dengan cara talaq khul’.
            </p><br><br>
            <p class="float-hub;padding: 0px 0px 0px 9px"><b>............................................<br>(Tandatangan Pendaftar)</b></p>
          </span>

        </div>
      </div>


      <div class="content-of-module">
        <div class=" p-2 mb-2 bg-info text-white">
          <h5 id="senarai">Senarai Semak</h5>
        </div>

        <div class="p-2 mb-2 bg-secondary text-white"><b>Dokumen yang perlu muat naik</b> &nbsp;<button>
            <img class=" img-upload " src=" img/upload.png" alt="upload documents not function">
          </button></div>
        <div style="padding: 0px 0px 0px 7px">
          <span>
            <fieldset>
              <div>
                <input type="checkbox" id="scales" name="dokumen">
                <label for="scales">checkSlip Permohonan Online (Pendaftaran Perkahwinan) [P4-01-01] </label> <br> <input type="file" required>
              </div>

              <div>
                <input type="checkbox" id="horns" name="dokumen">
                <label for="horns">checkBorang 3A/3B (Kebenaran Berkahwin)/ Borang 4 (Persetujuan Dan Wakalah Wali) Asal </label> <br> <input type="file" required>
              </div>

              <div>
                <input type="checkbox" id="scales" name="dokumen">
                <label for="scales">checkBorang 5 (Catatan Akad Nikah) Asal</label> <br> <input type="file" required>
              </div>

              <div>
                <input type="checkbox" id="horns" name="dokumen">
                <label for="horns">checkGambar Berukuran Passport (Latar Belakang Putih) 1 Keping Bagi Pengantin Lelaki Bersongkok</label> <br> <input type="file" required>
              </div>

              <div>
                <input type="checkbox" id="horns" name="dokumen">
                <label for="horns">checkGambar Berukuran Passport (Latar Belakang Putih) 1 Keping Bagi Pengantin Perempuan Bertudung Gelap</label> <br> <input type="file" required>
              </div>

              <div>
                <input type="checkbox" id="scales" name="dokumen">
                <label for="scales">checkSalinan Kad Pengenalan Saksi-Saksi Perkahwinan</label> <br> <input type="file" required>
              </div>

              <div>
                <input type="checkbox" id="horns" name="dokumen">
                <label for="horns">checkBayaran Pendaftaran RM 45.00</label> <br> <input type="file" required>
              </div>
            </fieldset>

          </span>
          <a href="m3_marriageStatusB.php"><button style="float:right">simpan</button></a>
          <a href="m3_marriageStatusA.php"><button style="float:right">Hantar</button></a>

        </div>
      </div>
      <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
      </section>


      <script src="javascript.js" defer></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>