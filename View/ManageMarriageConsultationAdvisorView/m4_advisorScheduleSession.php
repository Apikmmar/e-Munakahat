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
        <link rel="stylesheet" href="../assets/css/module4_a.css">
        <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <div class>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white justify-content-center">
            <div class="position-sticky">
                <br>
                <div class="userdata" style="background-color:#B9E49E;">
                    <span>ID : 710204070801<p></p></span>
                    <span>Nama : Hamsha Bin Hamdan<p></p></span>
                    <span>Akses : KAKITANGAN<p></p></span>
                    <span>Jabatan : JABATAN AGAMA ISLAM NEGERI PAHANG<p></p></span>
                </div>
            </div>
                <br><br>
                <div class="d-flex justify-content-center">
                    <div class="list-group" style="width: 16rem;">
                    <button class="btn btn-success h6" id="first">Laman Utama</button>
                    <button class="btn btn-success h6" id="list">Senarai Permohonan</button>
                    <button class="btn btn-success h6" id="schedule">Jadual Sesi Konsultasi</button>
                    <button class="btn btn-dark h6" id="exit">Keluar</button>
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
                    </script>
                    <span class="font12bold" id="clock">10:23:32 am</span>
                </div>
                <div class="float-hub">
                    <h6>HUBUNGI KAMI</h6>
                </div>
            </div>
        </nav>

        <!-- content -->
        <div class="content">
        <div class="p-2 mb-2 text-white" style="background-color:green;">
                <span class="h6 ">Khidmat Nasihat - Jadual Sesi Khidmat Nasihat</span>
            </div>
            <div class="content-of-module">
                <div id="custalign">
                    <form action="" method="post">
                        <div>
                            
                            <div class="d-flex flex-row">
                                <div><label for="date">Pilih tarikh:<span class="red-asterisk">*</label>
                                <td><select id="date" name="date">
                                <option value="w1">1 Julai 2023 - 7 Julai 2023</option>
                                <option value="w2">8 Julai 2023 - 14 Julai 2023</option>
                                <option value="w3">15 Julai 2023 - 21 Julai 2023</option>
                                <option value="w4">22 Julai 2023 - 28 Julai 2023</option>
                            </select></td>
                            &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-success">Semak</button><br><br>
                                </div>
                            </div>
                        <table style="width:50%" style="background-color:white;">
                          
                            <th>HARI</th>
                            <th>8:30 am - 9:30 am</th>
                            <th>10:00am - 11:00am</th>
                            <th>2:30pm - 3:30pm </th>
                      
                          <tr>
                            <td>ISNIN</td>
                            <td></td>
                            <td></td>
                            <td>000202022222 NAZRIN BIN MAHARI</td>
                          </tr>
                          <tr>
                            <td>SELASA</td>
                            <td></td>
                            <td>900312110321 AMINUDIN BIN BAKI</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>SELASA</td>
                            <td></td>
                            <td>000122020101 AMAN BIN MASRI</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>RABU</td>
                            <td>980323060554 SITI BINTI SAMEON</td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>KHAMIS</td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr><tr>
                            <td>JUMAAT</td>
                            <td>980323000554 ALI BIN AHMAD</td>
                            <td></td>
                            <td></td>
                          </tr>
                        </table>
                    </form>
                    <br><button type="next" ><a href="m4_advisorApplicationList.php">KEMBALI</a></button></div>                  
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