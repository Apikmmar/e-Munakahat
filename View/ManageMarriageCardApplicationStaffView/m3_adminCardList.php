<?php
// Database connection settings done
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>e-Munakahat</title>
  <link rel="shortcut icon" href="img/jata-pahang.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- external stylesheet -->
  <link rel="stylesheet" href="../assets/style.css">
  <link rel="stylesheet" href="../assets/css/module3.css">

  <!-- internal stylesheet -->
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th {
      background-color: #f2f2f2;
    }

    .icon {
      width: 30px;
      height: auto;
      cursor: pointer;
    }

    .back-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
    }
  </style>
</head>

<body>
  <div class="overlay">
    <!-- Sidebar -->
    <nav class="collapse d-lg-block sidebar collapse bg-white justify-content-center">
      <div class="position-sticky">
        <br>
        <div class="p-2 mb-1 bg-info text-white">
          <div class="userdata">
            ID : 710204070801
            <br>
            Nama :Hamsha Bin Hamdan
            <br>
            Akses :Kakitangan
            <br>
            Jabatan :Jabatan Agama Islam Negeri Pahang
          </div>
        </div>
        <br>
        <!-- navigation bar (left side) -->
        <div class="d-flex justify-content-center">
          <div class="list-group" style="width: 16rem;">
            <button class="btn btn-secondary h6">Laman Utama</button>
            <button class="btn btn-success h6">Profil</button>
            <button class="btn btn-success h6">Permohonan Berkahwin</button>
            <button class="btn btn-success h6">Pendaftaran Perkahwinan</button>
            <button class="btn btn-success h6">Khidmat Nasihat</button>
            <button class="btn btn-success h6">Insentif Khas Pasangan Pengantin</button>
            <button class="btn btn-success h6">Laporan</button>
            <button class="btn btn-success h6">Pengguna</button>
            <button class="btn btn-dark h6">Keluar</button>
            <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
          </div>
        </div>
      </div>
    </nav>
    <!-- title bar -->
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
    <div class="content-admin">
      <div class="p-2 mb-2 bg-success text-white">
        <span class="h6 text-uppercase">PENDAFTARAN PERKAHWINAN > Mohon Pengesahan Kad Nikah Dan Sijil > Senarai Permohonan Kad Nikah Dan Sijil</span>
      </div>
      <div class="content-of-module-admin">
        <div style="padding: 20px 0px 20px 6px">
          <h5 style="color:black;"> &nbsp; Senarai Permohonan Kad Nikah Dan Sijil </h5>
          <!-- the table of application card list -->
          <table style="width: 100%;border-collapse: collapse;">
            <tr>
              <th style=" padding: 10px;  width:60px; background-color: grey;">No</th>
              <th style=" width:360px; background-color: grey">No.KP / Nama Suami</th>
              <th style=" width:350px; background-color: grey">No.KP / Nama Isteri</th>
              <th style=" width:400px; background-color: grey">No.Akuan Terima</th>
              <th style=" width:300px; background-color: grey">Status</th>
              <th style=" width:400px; background-color: grey">Operasi</th>
            </tr>
            <tr>
              <td style="width: 10px; background-color: white;" ">1</td>
              <td style=" width: 360px; background-color: white;">011011011111 <br>Ali Bin Abu</td>
              <td style="width: 350px; background-color: white;">000202022222 <br>Aliya Binti Abdul</td>
              <td style="width: 400px; background-color: white;">KTM2M3/2023-001</td>
              <td style="color:green; width:300px; background-color: white;">Untuk Diluluskan</td>
              <td style="color:green; width:400px; background-color: white;">
                <!-- viewFile -->
                <img class=" icon" src="img/view.png" onclick="viewRecord(1)">
                <!-- editFile -->
                <img class="icon" src="img/edit.png" onclick="editRecord(1)">
                <a href="m3_adminApproveC.php"><img class="icon" src="img/approved.png" onclick="approveRecord(1)"></a>
                <!-- downloadFile -->
                <button style="border:none;" onclick="downloadFile()"><img class="icon" src="img/print.png"></button>
                <script>
                  function downloadFile() {
                    var filename = 'Borang Pendaftaran Nikah 001.php';
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
                <!-- deleteFile -->
                <img class="icon" src="img/delete.png" onclick="deleteRecord(1)">
              </td>
            </tr>
          </table>
          <br>
          <div> <a href="m3_adminMarriage.php"><button style="margin-top:25px; float:right;" class=" btn btn-success">Kembali</button></a></div>
          </script>

          <!-- external link to js file -->
          <script src="javascript.js" defer></script>
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>