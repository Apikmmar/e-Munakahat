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
                        <button class="btn btn-secondary h6" id="staffprepcoursemainpage">Laman Utama</button>
                        <button class="btn btn-success h6" id="regcourseven">Maklumat Taklimat</button>
                        <button class="btn btn-success h6" id="appcourseapp">Maklumat Peserta</button>
                        <button class="btn btn-success h6" id="utilityuser" onclick="window.location.href='m1_pengguna.php'">Pengguna</button>
                        <button class="btn btn-dark h6" id="staffmainpage">Kembali Ke e-Munakahat</button>
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
        <div class="content-admin">
            <div class="p-2 mb-2 bg-success text-white">
                <span class="h6 text-uppercase">PENGGUNA</span>
            </div>
            <div class="content-of-module-admin">
                <br><br>
                <div class="d-flex justify-content-center">
                    <div class="d-flex flex-row">
                    <h6 style="margin-top: 5px;" id="daftarkahwin">No. KP Pengguna</h6>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan No. KP Pengguna" required>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success">Carian</button>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
                <br>
                <div>
                    <table class="table table-bordered" id="searchcoursetable" style="width: 90%;">
                    <thead>
                        <tr style="background-color: #D3D3D3;">
                            <th scope="col" style="width: 2%;">Bil</th>
                            <th scope="col" style="width: 18%;">No.KP</th>
                            <th scope="col" style="width: 30%;">Nama Pengguna</th>
                            <th scope="col" style="width: 13%;">Peranan</th>
                            <th scope="col" style="width: 13%;">Status</th>
                            <th scope="col" style="width: 24%;" colspan="3">Operasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>011225112547</td>
                            <td>Mark</td>
                            <td>Pengguna</td>
                            <td>Aktif</td>
                            <td>
                                <img src="assets/img/update.png" alt="logopapar" class="imgflaticon">
                            </td>
                            <td>
                                <img src="assets/img/printer.png" alt="logodaftar" class="imgflaticon">
                            </td>
                            <td>
                                <img src="assets/img/delete.png" alt="logodaftar" class="imgflaticon">
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    <div style="padding-left: 100px;">
                        <button class="btn btn-success" id="tambahpengguna" onclick="window.location.href='m1_addpengguna.php'" >Tambah Pengguna</button>
                    </div>
                </div>
                <br><br>
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