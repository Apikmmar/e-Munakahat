<?php
    session_start();
    include('../database/connection.php');
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
                        <button class="btn btn-primary h6">Profil</button>
                        <button class="btn btn-primary h6">Permohonan Berkahwin</button>
                        <button class="btn btn-primary h6">Pendaftaran Perkahwinan</button>
                        <button class="btn btn-primary h6">Khidmat Nasihat</button>
                        <button class="btn btn-primary h6">Insentif Khas Pasangan Pengantin</button>
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
        <div class="content">
            <div class="p-2 mb-2 bg-primary text-white">
                <span class="h6 text-uppercase">PERMOHONAN BERKAHWIN >> MAKLUMAT PEMOHON</span>
            </div>
            <div class="content-of-module">
                <div style="padding: 20px 0px 0px 20px;">
                    <div>
                        <form action="../UserMarriageApplicationController.php" method="post">
                            <div>
                                <em>Ruang bertanda [*] wajib diisi</em>
                                <br>
                                <h5>Maklumat Pemohon</h5>
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    <div style="padding-top: 15px; width: 600px;">
                                        <div>
                                            <label>No Kad Pengenalan:</label>
                                            <p style="margin: 0; display: inline;">no ic</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>Nama Pemohon:</label>
                                            <p style="margin: 0; display: inline;">nama pemohon</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>Alamat Surat Menyurat:</label>
                                            <p style="margin: 0; display: inline;">alamat pemohon</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>Pekerjaan:</label>
                                            <p style="margin: 0; display: inline;">work</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>Sektor Pekerjaan:</label>
                                            <p style="margin: 0; display: inline;">work sector</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>No telefon(PEJABAT):</label>
                                            <p style="margin: 0; display: inline;">no fon pejabat</p>
                                        </div>
                                        <div id="inputformpadding">
                                            <div>
                                                <label>Status Kahwin:</label><br>
                                                    <select class="form-select" aria-label="Default select example" id="inputboxstyle" required>
                                                        <option>Pilih status perkahwinan</option>
                                                        <option value="bujang">Bujang</option>
                                                        <option value="telah berkahwin">Sudah Berkahwin</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style=" width: 600px;">
                                    <div style="padding-top: 15px;">
                                        <div>
                                            <label>Jantina:</label>
                                            <p style="margin: 0; display: inline;">jantina</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>Tarikh Lahir:</label>
                                            <p style="margin: 0; display: inline;">dob</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>No. Telefon:</label>
                                            <p style="margin: 0; display: inline;">no fon</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>Tahap pendidikan:</label>
                                            <p style="margin: 0; display: inline;">tahap pendidikan</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>Kerja:</label>
                                            <p style="margin: 0; display: inline;">tahap pendidikan</p>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <label>Warganegara:</label>
                                            <p style="margin: 0; display: inline;">status warganegara</p>
                                        </div>
                                        <div id="inputformpadding">
                                            <div>
                                                <label>Status Islam:</label><br>
                                                    <select class="form-select" aria-label="Default select example" id="inputboxstyle" required>
                                                        <option>Pilih status islam</option>
                                                        <option value="saudara baru">Saudara baru</option>
                                                        <option value="saudara lama">Bukan saudara baru</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div>
                                <h5>Maklumat Pasangan</h5>
                                <div>
                                    <h6>Masukkan IC Pasangan</h6>
                                    <div>
                                        <div class="d-flex justify-content-start" style="margin-top: 10px;">
                                            <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan IC" required>
                                            <button type="submit" class="btn btn-primary" style="margin-left: 20px;">Cari</button>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <table class="table table-bordered" id="searchcoursetable">
                                            <thead>
                                                <tr style="background-color: #D3D3D3;">
                                                    <th scope="col">No KP Pasangan</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">Tambah Sebagai Pasangan</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mark</td>
                                                    <td>Mark</td>
                                                    <td>
                                                        <img src="assets/img/add-user.png" alt="tambah_pasangan" class="imgflaticon" id="tambahpasangan">
                                                    </td>
                                                    <td>Mark</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h5>Maklumat HIV</h5>
                                <div>
                                    <em>Sila cetak borang dan bawa ke klinik kesihatan untuk lakukan check up sebelum masukkan data</em>&nbsp;&nbsp;
                                    <button type="submit" class="btn btn-secondary">Cetak</button>
                                </div>
                                <div class="d-flex flex-row">
                                    <div style="width: 600px;">
                                        <div style="padding-top: 10px;">
                                            <div id="inputformpadding">
                                                <label>Nama Klinik:</label>
                                                <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan nama klinik" required>
                                            </div>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <div id="inputformpadding">
                                                <label>Posisi/Jawatan Pegawai Perubatan:</label>
                                                <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan Posisi/Jawatan Pegawai Perubatan" required>
                                            </div>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <div id="inputformpadding">
                                                <div>
                                                    <label>Status HIV:</label><br>
                                                        <select class="form-select" aria-label="Default select example" id="inputboxstyle" required>
                                                            <option>Masukkan Status</option>
                                                            <option value="positif hiv">Poitif HIV</option>
                                                            <option value="negatif hiv">NegatifHIV</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="width: 600px;">
                                        <div style="padding-top: 10px;">
                                            <div id="inputformpadding">
                                                <label>Nama Pegawai Perubatan:</label>
                                                <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan negeri" required>
                                            </div>
                                        </div>
                                        <div style="padding-top: 10px;">
                                            <div id="inputformpadding">
                                                <label>Tarikh:</label>
                                                <input type="text" class="form-control form-control-sm" id="inputboxstyle" placeholder="Masukkan negeri" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="reset" class="btn btn-danger">Reset</button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-primary" id="gotomarriageinfo">Seterusnya</button>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="submit" class="btn btn-secondary" id="backtomainpage">Kembali</button>
                            </div>
                            <br>
                        </form>
                    </div>
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