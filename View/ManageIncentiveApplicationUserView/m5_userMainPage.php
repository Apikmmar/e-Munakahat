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
                        <button class="btn btn-primary h6" id="userloginmainpage">Profil</button>
                        <button class="btn btn-primary h6" id="userprepcoursemainpage">Kursus Pra-Perkahwinan</button>
                        <button class="btn btn-primary h6" id="userprepcoursemainpage">Permohonan Berkahwin</button>
                        <button class="btn btn-primary h6" id="usermarriagemainpage">Pendaftaran Perkahwinan</button>
                        <button class="btn btn-primary h6" id="userconsultationmainpage">Khidmat Nasihat</button>
                        <button class="btn btn-primary h6" id="userincentivemainpage">Insentif Khas Pasangan Pengantin</button>
                        <button class="btn btn-dark h6" onclick="window.location.href='../ManageLoginView/m1_login.php'">Keluar</button>
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
                <div>
                    <div class="container">
                        <h3>Senarai Permohonan</h3>
                        <button style="float: right;" type="btn" id="mohonbantuan" class="btn btn-primary">Mulakan Permohonan</button>
                        <button style="float: right;" type="btn" id="termadansyarat" class="btn btn-primary">Lihat Terma dan Syarat</button>
                        <br><br>
                    </div>
                    <table class="table table-bordered" id="searchcoursetable" style="width: 90%;table-layout: fixed">
                        <thead>
                            <tr style="background-color: #D3D3D3;">
                                <th style="width:50px" scope="col">Bil</th>
                                <th scope="col">No.KP / Nama Suami</th>
                                <th scope="col">No.KP / Nama Isteri</th>
                                <th scope="col">Tarikh Mohon</th>
                                <th scope="col">Status</th>
                                <th scope="col" colspan="3">Operasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>931882-06-0061<br>Muhammad Abu bin Seman</td>
                                <td>931882-06-0061<br>Siti Nur Fathiah binti Asnul</td>
                                <td>12/6/2023</td>
                                <td>Dalam Proses</td>
                                <td>
                                    <a href="m5_userViewApplicationDetail.php"><img src="../assets/img/view.png"
                                            alt="logopapar" class="imgflaticon"></a>
                                </td>
                                <td>
                                    <a href="m5_userEditApplicantInformation.php"><img src="../assets/img/edit.png"
                                            alt="logopapar" class="imgflaticon"></a>
                                </td>
                                <td>
                                    <img src="../assets/img/delete.png" alt="logodaftar" class="imgflaticon">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br><br>
            </div>
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