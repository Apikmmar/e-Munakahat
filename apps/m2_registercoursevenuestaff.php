<?php
    session_start();
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
                <span class="h6 text-uppercase">DAFTAR TAKLIMAT</span>
            </div>
            <div class="content-of-module-admin">
                <div style="padding-left: 30px; padding-top: 5px;">
                    <em>[*] adalah wajib diisi</em>
                </div>
                <div class="d-flex flex-row">
                    <div style="padding-left: 30px; padding-top: 10px; width: 600px;">
                        <div>
                            <label class="vcdlabel">Tarikh Mula :</label>
                            <input type="text" class="form-control-sm datepicker" placeholder="Select date" required>
                            <em>(dd-mm-yyyy)</em>
                        </div>
                        <div>
                            <label class="vcdlabel">Tempat :</label>
                            <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan tempat" required>
                        </div>
                        <div>
                            <label class="vcdlabel">Masa Dari :</label>
                            <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan alamat" required>
                        </div>
                        <div>
                            <label class="vcdlabel">Pegawai Dihubungi :</label>
                            <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan masa" required>
                        </div>
                        <div>
                            <label class="vcdlabel">No Telefon :</label>
                            <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan no telefon" required>
                        </div>
                        <div style="display: flex;">
                            <label class="vcdlabel">Catatan :</label>
                            <textarea type="textarea" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan catatan" required></textarea>
                        </div>
                    </div>
                    <div style="padding-left: 30px; padding-top: 10px; width: 600px;">
                        <div>
                            <label class="vcdlabel">Tarikh Tamat :</label>
                            <input type="text" class="form-control-sm datepicker" placeholder="Select date" required>
                            <em>(dd-mm-yyyy)</em>
                        </div>
                        <div>
                            <label class="vcdlabel">Kapasiti :</label>
                            <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan kapasiti" required>
                        </div>
                       <br><br>
                        <div>
                            <label class="vcdlabel">Masa Tamat :</label>
                            <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan masa" required>
                        </div>
                        <br><br>
                        <div>
                            <label class="vcdlabel">Terbitkan kepada umum :</label>
                            <select class="form-select" aria-label="Default select example" id="inputboxstyle2" required>
                                <option selected value="No val">Sila pilih</option>
                                <option value="Yes">Ya</option>
                                <option value="No">Tidak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    &nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    &nbsp;&nbsp;
                    <button type="btn" id="" class="btn btn-primary" id="backbuttonstaff">Kembali</button>
                </div>
                <br>
                <div>
                    <table class="table table-bordered" id="searchcoursetable" style="">
                    <thead>
                        <tr style="background-color: #D3D3D3;">
                            <th scope="col">Bil</th>
                            <th scope="col">Siri</th>
                            <th scope="col">Tempat</th>
                            <th scope="col">Masa</th>
                            <th scope="col">Tarikh</th>
                            <th scope="col">Kapasiti</th>
                            <th scope="col" colspan="3">Operasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>Mark</td>
                            <td>
                                <img src="assets/img/delete.png" alt="logopapar" class="imgflaticon" id="">
                            </td>
                            <td>
                                <img src="assets/img/update.png" alt="logodaftar" class="imgflaticon" id="">
                            </td>
                            <td>
                                <img src="assets/img/printer.png" alt="logodaftar" class="imgflaticon" id="">
                            </td>
                        </tr>
                    </tbody>
                    </table>
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