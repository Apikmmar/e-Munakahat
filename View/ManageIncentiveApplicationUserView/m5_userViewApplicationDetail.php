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
<style>
    #searchcoursetable,
    td,
    tr,
    th {
        text-align: left;
        border: none;
        width: 80%;
    }
</style>

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
                <span class="h6 text-uppercase">PERMOHONAN BANTUAN INSENTIF KHAS</span>
            </div>
            <div class="content-of-module">
                <div id="custalign">
                    <div style="display: flex; justify-content: center;">
                        <img src="../assets/img/jata-pahang.png" class="jata">
                        <br>
                    </div>
                    <div style="display: flex; justify-content: center;text-align: center;font-weight: bold;">
                        JABATAN AGAMA ISLAM PAHANG (JAIP)
                        <br>
                        PERMOHONAN BANTUAN INSENTIF KHAS
                    </div>
                    <br>
                    <div class="p-1 mb-2 bg-primary text-white">
                        <span class="h6 text-uppercase">Dokumen Pemohon</span>
                    </div>
                    <table style="table-layout: fixed;width:70%;">
                        <tr>
                            <td>Salinan Kad Pengenalan pemohon</td>
                            <td>: <a href="../assets/documentexample/contohIC.pdf">ICPemohon.pdf</a></td>
                        </tr>
                        <tr>
                            <td>Salinan catatan akad nikah pemohon</td>
                            <td>: <a href="../assets/documentexample/suratperakuannikah.pdf">suratperakuannikah.pdf</a></td>
                        </tr>
                        <tr>
                            <td>Salinan penyata akaun bank pemohon</td>
                            <td>: <a href="../assets/documentexample/penyata-maybank.pdf">penyata-maybank.pdf</a></td>
                        </tr>
                        <tr>
                            <td>Dokumen sokongan</td>
                            <td>: Tiada</td>
                        </tr>
                    </table>
                    <br>
                    <div class="p-1 mb-2 bg-primary text-white">
                        <span class="h6 text-uppercase">Maklumat Pemohon</span>
                    </div>
                    <table style="table-layout: fixed;width:70%;">
                        <tr>
                            <td>No. K/Pengenalan</td>
                            <td>: 931882-06-0061</td>
                        </tr>
                        <tr>
                            <td>No. Passport / Tentera / Polis</td>
                            <td>: 931882-06-0061</td>
                        </tr>
                        <tr>
                            <td>No. Akaun bank</td>
                            <td>: 3812359818235</td>
                        </tr>
                        <tr>
                            <td>Nama Bank</td>
                            <td>: Maybank</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: Muhammad Abu bin Seman</td>
                        </tr>
                        <tr>
                            <td>Alamat Semasa</td>
                            <td>: LOT. 414, KAWASAN PERINDUSTRIAN PERAMU, 26600 PEKAN, PAHANG</td>
                        </tr>
                        <tr>
                            <td>No.Telefon</td>
                            <td>: 019-9215521</td>
                        </tr>
                        <tr>
                            <td>Tarikh Lahir</td>
                            <td>: 21/12/1993</td>
                        </tr>
                        <tr>
                            <td>Tempat lahir</td>
                            <td>: Kuantan, Pahang</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>: Warganegara</td>
                        </tr>
                    </table>
                    <br>
                    <div class="p-1 mb-2 bg-primary text-white">
                        <span class="h6 text-uppercase">Maklumat Pasangan</span>
                    </div>
                    <table style="table-layout: fixed;width:70%">
                        <tr>
                            <td>No. K/Pengenalan</td>
                            <td>: 931882-06-0061</td>
                        </tr>
                        <tr>
                            <td>No. Passport / Tentera / Polis</td>
                            <td>: 931882-06-0061</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>: Siti Nur Fathiah binti Asnul</td>
                        </tr>
                        <tr>
                            <td>Alamat Semasa</td>
                            <td>: LOT 2323, JALAN TENGKU ARIF BENDAHARA, 26600 PEKAN, PAHANG</td>
                        </tr>
                        <tr>
                            <td>Pendapatan</td>
                            <td>: RM2500.00</td>
                        </tr>
                        <tr>
                            <td>No.Telefon</td>
                            <td>: 019-2817423</td>
                        </tr>
                        <tr>
                            <td>Tarikh Lahir</td>
                            <td>: 25/10/1992</td>
                        </tr>
                        <tr>
                            <td>Tempat lahir</td>
                            <td>: Pekan, Pahang</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>: Warganegara</td>
                        </tr>
                    </table>
                    <br>
                    <div class="p-1 mb-2 bg-primary text-white">
                        <span class="h6 text-uppercase">Maklumat Pekerjaan Pemohon</span>
                    </div>
                    <table style="table-layout: fixed;width:70%">
                        <tr>
                            <td>Pekerjaan</td>
                            <td>: PETRONAS OIL AND GAS</td>
                        </tr>
                        <tr>
                            <td>Jenis Perkerjaan</td>
                            <td>: Swasta</td>
                        </tr>
                        <tr>
                            <td>Pendapatan</td>
                            <td>: RM4500.00</td>
                        </tr>
                        <tr>
                            <td>Nama & alamat Majikan/Premis Perniagaan</td>
                            <td>: LOT 2475, GM 5709, MUKIM PAKA DAERAH DUNGUN, 23100 KUALA TERENGGANU, TERENGGANU</td>
                        </tr>
                    </table>
                    <br>
                    <div class="p-1 mb-2 bg-primary text-white">
                        <span class="h6 text-uppercase">Maklumat Waris Terdekat Yang Boleh Dihubungi</span>
                    </div>
                    <table style="table-layout: fixed;width:70%">
                        <tr>
                            <td>Nama Waris</td>
                            <td>: Idris bin Abu Wahab</td>
                        </tr>
                        <tr>
                            <td>Hubungan</td>
                            <td>: Sepupu</td>
                        </tr>
                        <tr>
                            <td>No. Tel</td>
                            <td>: 013-8237112</td>
                        </tr>
                    </table>
                    <br>
                    <div class="p-1 mb-2 bg-primary text-white">
                        <span class="h6 text-uppercase">Maklumat Pejabat</span>
                    </div>
                    <table style="table-layout: fixed;width:70%">
                        <tr>
                            <td>Tarikh Permohonan</td>
                            <td>: 12/6/2023</td>
                        </tr>
                        <tr>
                            <td>Pengesahan</td>
                            <td>: Dalam Proses</td>
                        </tr>
                    </table>

                    <div>

                    </div>
                </div>
            </div>
        </div>

        <script src="../assets/js/javascript.js" defer></script>
        <script src="../assets/js/module5js.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
</body>

</html>