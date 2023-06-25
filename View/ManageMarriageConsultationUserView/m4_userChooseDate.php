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
        <link rel="stylesheet" href="../assets/css/module4_u.css">
        <link rel="stylesheet" href="../assets/style.css">
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
                    <button class="btn btn-primary h6" id="profil">Laman Utama</button>
                    <button class="btn btn-primary h6" id="permohonan">Maklumat Permohonan</button>
                    <button class="btn btn-primary h6" id="mohonkahwin">Borang Permohonan</button>
                    <button class="btn btn-primary h6" id="feedback">Ulasan</button>
                    <button class="btn btn-primary h6" style="background-color:#000;" id="exit">Keluar</button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- navbar -->
        <nav class="p-1 mb-1 bg-primary text-white justify-content-center fixed-top">
            <div class="h-span-container">
                <button class="navbar-button" id="hey">&#9776;</button>
                <h6 class=".float-start"> e-Munakahat
                <img src="../assets/img/phg.png" alt="jata-pahang" class="imglogo-upper-interface"  width="40" height="40">
                <img src="../assets/img/mas.png" alt="logo-persekutuan-malaysia" class="img-upper-interface" width="120" height="50"></h6>
                
                <div class="timedatebox">
                    <span id="date">&nbsp;<span id="time"></span>
                    <font class="font12bold"></font>
                    <script language="JavaScript">  
                        var mydate=new Date()
                        var year=mydate.getYear()
                        if (year < 1000)
                        year+=1900
                        var day=mydate.getDay()
                        var month=mydate.getMonth()
                        var daym=mydate.getDate()
                        if (daym<10)
                        daym="0"+daym
                        var dayarray=new Array("Ahad","Isnin","Selasa","Rabu","Khamis","Jumaat","Sabtu")
                        var montharray=new Array("Januari","Februari","Mac","April","Mei","Jun","Julai","Ogos","September","Oktober","November","Disember")
                        document.write(dayarray[day]+", "+daym+" "+montharray[month]+" "+year)     
                    </script></font>
                    <span class="font12bold" id="clock">10:23:32 am</span>
                </div>
                <div class="float-hub">
                    <h6>HUBUNGI KAMI</h6>
                </div>
            </div>
        </nav>

        <!-- content -->
        <div class="content">
            <div class="p-2 mb-2 bg-primary text-white">
                <span class="h6 ">Khidmat Nasihat - Permohonan Baru - Memilih tarikh & penasihat</span>
            </div>
            <div class="content-of-module">
                <div id="custalign">
                    <form action="" method="post">
                        <div>
                            
                            <div class="d-flex flex-row">
                                <div>
                                    
                                        <label for="date">Pilih tarikh:<span class="red-asterisk">*</label>
                                        <input type="date" id="date" name="date" >
                                        <button type="submit" class="btn btn-primary">Kembali</button>
                                   
                                    <div>
                                    <label for="appt">Pilih masa:<span class="red-asterisk">*</label>
                                    <input type="time" id="appt" name="appt">
                               
                                    <div> 
                                        <br>
                                    <label for="penasihat">Pilih penasihat:<span class="red-asterisk">*</label>
                                    <input text="penasihat" id="penasihat" name="penasihat">
                                    <br><em>Nota: Sila tanda kotak dibawah untuk pilih Pegawai Penasihat.</em>


                            </div>
                        </div>
                        <br>
                        <h6>Senarai pegawai bertugas pada tarikh yang dipilih:</h6>

                        <table style="width:50%" style="background-color:white;">
                          
                            <th>Bil.</th>
                            <th>ID/Nama Pegawai Penasihat</th>
                            <th>Jabatan</th>
                            <th>Nombor Telefon</th>
                            <th>Pilih</th>
                      
                          <tr>
                            <td>1.</td>
                            <td>775834691310 HUSIN BIN KAMIL</td>
                            <td>JABATAN AGAMA ISLAM PAHANG</td>
                            <td>+60 14-400 3368</td>
                            <td><input type="checkbox" id="pilih" name="p1">
                            <label for="p1"></label><br></td>
                          </tr>
                          
                          <tr>
                            <td>2.</td>
                            <td>710204070801 HAMSHA BIN HAMDAN</td>
                            <td>JABATAN AGAMA ISLAM PAHANG</td>
                            <td>+60 10-426 6463</td>
                            <td><input type="checkbox" id="pilih" name="p1">
                            <label for="p1"></label><br></td>
                          </tr>

                          <tr>
                            <td>3.</td>
                            <td>349290025864 MARIAH BINTI SAMSUL</td>
                            <td>JABATAN AGAMA ISLAM PAHANG</td>
                            <td>+60 14-400 3017</td>
                            <td><input type="checkbox" id="pilih" name="p1">
                            <label for="p1"></label><br></td>
                          </tr>

                          <tr>
                            <td>4.</td>
                            <td>710204070801 ROZITA BINTI HAMZAH</td>
                            <td>JABATAN AGAMA ISLAM PAHANG</td>
                            <td>+60 18-824 4022</td>
                            <td><input type="checkbox" id="pilih" name="p4">
                            <label for="p4"></label><br></td>
                          </tr>

                          <tr>
                            <td>5.</td>
                            <td>215742660104 SHAHRUL BIN CHE ALI</td>
                            <td>JABATAN AGAMA ISLAM PAHANG</td>
                            <td>+60 18-873 0882</td>
                            <td><input type="checkbox" id="pilih" name="p5">
                            <label for="p5"></label><br></td>
                          </tr>
                          
                        </table>
                    </form>
                    <div><br><button type="submit" ><a href="m4_userUpdatePage.php">Hantar</a></button>
                    
                                        
                </div>
            </div>
        </div>
    </div>

    <script src="javascript.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>