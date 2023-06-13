<?php
    session_start();
    require '../../database/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Munakahat</title>
    <link rel="shortcut icon" href="../assets/img/jata-pahang.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/css/module2.css">

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
                        <button class="btn btn-success h6">Profil</button>
                        <button class="btn btn-success h6">Kursus Pra Perkahwinan</button>
                        <button class="btn btn-success h6">Kebenaran Berkahwin</button>
                        <button class="btn btn-success h6">Pendaftaran Nikah</button>
                        <button class="btn btn-success h6">Khidmat Nasihat</button>
                        <button class="btn btn-success h6">Insentif Khas Pasangan Pengantin</button>
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
                <img src="../assets/img/jata-pahang.png" alt="jata-pahang" class="imglogo-upper-interface">
                <img src="../assets/img/Logo-KPM-BI-font-putih.png" alt="logo-persekutuan-malaysia" class="img-upper-interface">
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
                <span class="h6 text-uppercase">KEBENARAN BERKAHWIN >> SENARAI PERMOHONAN</span>
            </div>
            <div class="content-of-module-admin">
                <div style="padding: 20px 0px 0px 20px;">
                    <form action="../../Business_Service/Controller/ManageMarriageApplication/StaffMarriageApplicationController.php" method="post">
                        <div>
                            <div class="d-flex justify-content-around">
                                <div id="inputformpadding" style="margin-bottom: 20px;">
                                    <label>No K/P Pemohon:</label>
                                    <input type="text" class="form-control form-control-sm" id="inputboxstyle1" placeholder="No K/P Pemohon" required>
                                </div>
                                <div id="inputformpadding">
                                    <label>Nama Pemohon:</label>
                                    <input type="text" class="form-control form-control-sm" id="inputboxstyle1" placeholder="nama Pemohon" required>
                                </div>
                                <div id="inputformpadding">
                                    <label>Tarikh Mohon:</label>
                                    <input type="text" class="form-control form-control-sm" id="inputboxstyle1" placeholder="Tarikh Mohon" required>
                                </div>
                                <div id="inputformpadding">
                                    <label>Tarikh Akad Nikah:</label>
                                    <input type="text" class="form-control form-control-sm" id="inputboxstyle1" placeholder="Tarikh Akad Nikah" required>
                                </div>
                                <div id="inputformpadding">
                                    <label>No Akuan Terima:</label>
                                    <input type="text" class="form-control form-control-sm" id="inputboxstyle1" placeholder="No Akuan Terima" required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success" id="searchsenarai">Cari</button>
                            </div>
                        </div>
                        <div style="padding-top: 20px;">
                            <table class="table table-bordered" id="searchcoursetable" style="width: 90%;">
                            <thead>
                                <tr style="background-color: #D3D3D3;">
                                    <th scope="col">Bil</th>
                                    <th scope="col">No KP Pemohon</th>
                                    <th scope="col">Nama Pemohon</th>
                                    <th scope="col">Tarikh Mohon</th>
                                    <th scope="col">No Akuan Terima</th>
                                    <th scope="col">Tarikh Akad Nikah</th>
                                    <th scope="col">Operasi</th>
                                    <th scope="col">Status</th>
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
                                    <td class="d-flex justify-content-between">
                                        <img src="../assets/img/evaluation.png" alt="view" class="imgflaticon" id="viewmarriageapplicant">
                                        <img src="../assets/img/approved.png" alt="lulus" class="imgflaticon" id="approvemarriageapplicant">
                                        <img src="../assets/img/rejected.png" alt="tidak lulus" class="imgflaticon" id="rejectmarriageapplicant">
                                    </td>
                                    <td>Status</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/javascript.js" defer></script>
    <script src="../assets/js/module2js.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>