<?php
include('../database/connection.php');
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
  <link rel="stylesheet" href="assets/style.css">
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

    <div class="content">
      <div class="p-2 mb-2 bg-primary text-white">
        <span class="h6 text-uppercase">Kad Nikah Dan Sijil > Status</span>
      </div>

      <!-- marriage card status-->
      <div class="content-of-module">

        <div class="p-2 mb-2 bg-secondary text-white"><b>Permohonan Kad Nikah Dan Sijil</b> </div>
        <div style="padding: 2px 0px 0px 7px">
          <span>

            <p style="width:1100px ;padding: 2px 0px 0px 7px">
              <b>Nama Suami &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <b id="blue">Ali Bin Abu</b> <br>
              <b>Nama Isteri &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <b id="blue">Aliya Binti Abdul</b> <br>
              <b>Tarikh Mohon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <b id="blue">23-7-2023</b><br>
              <b>Tarikh Terima &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <b id="blue">23-10-2023</b><br>
              <b> No.Permohonan Online &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <b id="blue">M3/2023-00001</b><br>
              <b>No.Akuan Terima&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b> <b id="blue">KTN2M3/2023-001</b><br>
              <b> Pilihan Penghantaran&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <b id="blue">COD</b><br>
              <b> Tarikh Penghantaran&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <b id="blue">30-10-2023</b><br>
              <b> Alamat Penghantaran&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b> <b id="blue">55,Taman Teja Pahang</b><br>
            </p><br>
            <table id="table1">
              <tr>
                <th style=" padding: 10px;  width:60px; background-color: grey;">Bil</th>
                <th style=" width:360px; background-color: grey">No.KP/Nama Suami</th>
                <th style=" width:360px; background-color: grey">No.KP/Nama Isteri</th>
                <th style=" width:200px; background-color: grey">No.Resit Bayaran</th>
                <th style=" width:150px; background-color: grey">Status</th>

              </tr>
              <tr>
                <td style="width: 50px; background-color: white;">1.</td>
                <td style="width: 100px; background-color: white;">011010111101 Ali Bin Abu</td>
                <td style="width: 180px; background-color: white;">000202022220 Aliya Binti Abdul</td>
                <td style="width: 50px; background-color: white;">RPN/00001/2023</td>
                <td style="color:green; width: 50px; background-color: white;"><b>Untuk Diluluskan</b>
                </td>
              </tr>
            </table>
            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          </span>

        </div>
      </div>
      <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>

      <script src="javascript.js" defer></script>
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>