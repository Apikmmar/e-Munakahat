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
    <link rel="stylesheet" href="assets/css/style.css">

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
                <span class="h6 text-uppercase">PENGGUNA >> KEMAS KINI PENGGUNA</span>
            </div>
            <div class="content-of-module-admin">
                <div id="custalign">
                    <form action="" method="post">
                        <div>
                            <div id="inputformpadding">
                                <em>Ruangan yang bertanda [<span class="red-asterisk">*</span>] adalah WAJIB diisi</em>
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <div id="inputformpadding">
                                        <label>No. Kad Pengenalan<span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" id="alamatstyle" name="icnum" required>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Nama Pengguna<span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" id="alamatstyle" name="nama" required>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Jawatan Pengguna<span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" id="alamatstyle" name="jawatan" required>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>PAID<span class="red-asterisk">*</span>:</label><br>
                                        <select class="form-control form-control-sm" required>
                                            <option value="" selected disabled>- Sila Pilih - </option>
                                            <option value="1">Russia</option>
                                            <option value="2">Germany</option>
                                        </select>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Kategori Akses<span class="red-asterisk">*</span>:</label><br>
                                        <select name="akses" class="form-control form-control-sm" required>
                                            <option value="" selected disabled>- Sila Pilih - </option>
                                            <option value="1">Russia</option>
                                            <option value="2">Germany</option>
                                        </select>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Emel<span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" id="alamatstyle" name="emel" required>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Status Pengguna<span class="red-asterisk">*</span>:</label><br>
                                        <select name="akses" class="form-control form-control-sm">required
                                            <option value="" selected disabled>- Sila Pilih - </option>
                                            <option value="1">Russia</option>
                                            <option value="2">Germany</option>
                                            <option value="3">France</option>
                                            <option value="5">USA</option>
                                        </select>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Kata Laluan<span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" id="alamatstyle" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="btn-block">
                            <button type="submit" class="btn btn-success" href="m1_addpengguna.php">Daftar</button>
                        </div>
                    </form>
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