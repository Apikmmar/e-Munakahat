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
                        <button class="btn btn-primary h6" id="userprepcoursemainpage">Permohonan Berkahwin</button>
                        <button class="btn btn-primary h6" id="usermarriagemainpage">Pendaftaran Perkahwinan</button>
                        <button class="btn btn-primary h6" id="userconsultationmainpage">Khidmat Nasihat</button>
                        <button class="btn btn-primary h6" id="userincentivemainpage">Insentif Khas Pasangan Pengantin</button>
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
                <span class="h6 text-uppercase">Mohon Bantuan Insentif (Maklumat Pemohon)</span>
            </div>
            <div class="content-of-module">
                <div id="custalign">
                    <form action="m5_userInputPartnerInformation.php" method="post">
                        <div>
                            <div id="inputformpadding">
                                <em>Ruangan yang bertanda [<span class="red-asterisk">*</span>] adalah WAJIB diisi</em>
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <div id="inputformpadding">
                                        <label>No. K/Pengenalan <span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" id="ic"
                                            value="931882-06-0061" placeholder="Masukkan IC" disabled>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>No. Passport/Tentera/Polis <span
                                                class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" id="ic"
                                            value="931882-06-0061" placeholder="IC" disabled>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Nama <span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" id="nama"
                                            value="Muhammad Abu bin Seman" placeholder="Masukkan alamat" disabled>
                                    </div>
                                    <div class="d-flex justify-content-between" id="inputformpadding">
                                        <div>
                                            <label>No. Akuan bank <span class="red-asterisk">*</span>:</label><br>
                                            <input type="text" class="form-control form-control-sm" id="inputboxstyle"
                                                id="akuanbank" name="akuanbank" placeholder="Masukkan no. bank"
                                                required>
                                        </div>
                                        <div>
                                            <label>Nama Bank <span class="red-asterisk">*</span>:</label><br>
                                            <input type="text" class="form-control form-control-sm" id="inputboxstyle"
                                                id="namabank" name="namabank" placeholder="Masukkan nama bank" required>
                                        </div>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Alamat Semasa <span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" id="alamatstyle"
                                            value="LOT. 414, KAWASAN PERINDUSTRIAN PERAMU, 26600 PEKAN, PAHANG"
                                            placeholder="Masukkan alamat" disabled>
                                    </div>
                                    <div class="d-flex justify-content-between" id="inputformpadding">
                                        <div>
                                            <label>No Telefon <span class="red-asterisk">*</span>:</label><br>
                                            <input type="text" class="form-control form-control-sm" id="inputboxstyle"
                                                value="019-9215521" placeholder="Masukkan nombor telefon" disabled>
                                        </div>
                                        <div>
                                            <label>Tarikh Lahir <span class="red-asterisk">*</span>:</label><br>
                                            <input type="text" class="form-control form-control-sm" id="inputboxstyle"
                                                value="21/12/1993" placeholder="Masukkan daerah" disabled>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between" id="inputformpadding">
                                        <div>
                                            <label>Umur <span class="red-asterisk">*</span>:</label><br>
                                            <input type="text" class="form-control form-control-sm" id="inputboxstyle"
                                                value="26" placeholder="Masukkan negeri" disabled>
                                        </div>
                                        <div>
                                            <label>Kewarganegaraan <span class="red-asterisk">*</span>:</label><br>
                                            <input type="text" class="form-control form-control-sm" id="inputboxstyle"
                                                value="Warganegara" placeholder="Masukkan daerah" disabled>
                                        </div>
                                    </div>
                                    <div id="inputformpadding">
                                        <label>Tempat lahir <span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" class="form-control form-control-sm" id="tempatlahir"
                                            name="tempatlahir" placeholder="Masukkan tempat lahir" required>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <br>
                        <div class="d-flex justify-content-around" style="width: 300px;">
                            <button type="btn" id="backtouserupload" class="btn btn-primary">Kembali</button>
                            <button type="submit" name="submit" value="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/javascript.js" defer></script>
    <script src="../assets/js/module5js.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>