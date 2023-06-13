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
    <link rel="stylesheet" href="assets/css/module1.css">

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
                        <button class="btn btn-success h6" onclick="window.location.href='m1_viewStaffProfile.php'">Profil</button>
                        <button class="btn btn-success h6">Permohonan Berkahwin</button>
                        <button class="btn btn-success h6">Pendaftaran Perkahwinan</button>
                        <button class="btn btn-success h6">Khidmat Nasihat</button>
                        <button class="btn btn-success h6">Insentif Khas Pasangan Pengantin</button>
                        <button class="btn btn-success h6">Laporan</button>
                        <button class="btn btn-success h6" onclick="window.location.href='m1_staffUtility.php'">Pengguna</button>
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
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <table style="border-collapse: collapse; border:none; margin-top: 20px;" id="formprofiletable">
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>No. Kad Pengenalan :</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <label>010203040506</label>
                                            </td>
                                        </tr>
                                        <tr style="border:none; ">
                                            <td style="border:none;" >
                                                <label><b>Nama Pengguna<span class="red-asterisk">*</span>:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <input type="text" class="form-control form-control-sm" id="alamatstyle" name="nama" required>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>Jawatan Pengguna<span class="red-asterisk">*</span>:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <input type="text" class="form-control form-control-sm" id="alamatstyle" name="jawatan" required>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>PAID<span class="red-asterisk">*</span>:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <select class="form-control form-control-sm" required>
                                                    <option value="" selected disabled>- Sila Pilih - </option>
                                                    <option value="PAID Pekan">PAID Pekan</option>
                                                    <option value="PAID Kuantan">PAID Kuantan</option>
                                                    <option value="PAID Rompin">PAID Rompin</option>
                                                    <option value="PAID Muadzam Shah">PAID Muadzam Shah</option>
                                                    <option value="PAID Maran">PAID Maran</option>
                                                    <option value="PAID Jengka">PAID Jengka</option>
                                                    <option value="PAID Kuantan Barat">PAID Kuantan Barat</option>
                                                    <option value="PAID Temerloh">PAID Temerloh</option>
                                                    <option value="PAID Bentong">PAID Bentong</option>
                                                    <option value="PAID Jerantut">PAID Jerantut</option>
                                                    <option value="PAID Raub">PAID Raub</option>
                                                    <option value="PAID Kuala Lipis">PAID Kuala Lipis</option>
                                                    <option value="PAID Bera">PAID Bera</option>
                                                    <option value="PAID Cameron Highland">PAID Cameron Highland</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>Kategori Akses<span class="red-asterisk">*</b></span>:</label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <select name="akses" class="form-control form-control-sm" required>
                                                    <option value="" selected disabled>- Sila Pilih - </option>
                                                    <option value="Pengguna PAID">Pengguna PAID</option>
                                                    <option value="Pentadbir Sistem JAIP">Pentadbir Sistem JAIP</option>
                                                    <option value="Pengawai Kaunter">Pengawai Kaunter</option>
                                                    <option value="Pengawai Kewangan">Pengawai Kewangan</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>Emel<span class="red-asterisk">*</span>:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <input type="text" class="form-control form-control-sm" id="alamatstyle" name="emel" required>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>Status Pengguna<span class="red-asterisk">*</span>:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <select name="status" class="form-control form-control-sm">required
                                                    <option value="" selected disabled>- Sila Pilih - </option>
                                                    <option value="Masih Bekerja">Masih Bekerja</option>
                                                    <option value="Bersara">Bersara</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr style="border:none;">
                                            <td style="border:none;" >
                                                <label><b>Kata Laluan<span class="red-asterisk">*</span>:</b></label> &nbsp;
                                            </td>
                                            <td style="border:none;">
                                                <input type="text" class="form-control form-control-sm" id="alamatstyle" name="password" required>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="btn-block d-flex justify-content-center">
                            <button type="submit" class="btn btn-success" href="m1_pengguna.php">Kemas Kini</button>
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