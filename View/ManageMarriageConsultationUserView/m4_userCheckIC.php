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
                <span class="h6 text-uppercase">KHIDMAT NASIHAT</span>
            </div>
            <div class="content-of-module">
                <div id="custalign">
                    <form action="" method="post">
                            <div class="d-flex flex-row">
                                <div>
                                    <div id="inputformpadding">    
                                        <label>No. K/P /Passport <span class="red-asterisk">*</span>:</label><br>
                                        <input type="text" id="fname" name="fname">&nbsp;&nbsp;&nbsp;<button type="submit" >Semak</a></button>
                                        &nbsp;&nbsp;&nbsp;<button type="submit" ><a href="m4_userCheckNewRegister.php">Permohonan Baru</a></button>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <h6>Tiada rekod permohonan.</h6>

                        <table style="width:50%">
                          
                            <th>Bil</th>
                            <th>KP/Nama isteri   </th>
                            <th>No.Slip Permohonan   </th>
                            <th>Tarikh Mohon   </th>
                            <th>Status   </th>
                            <th>Operasi   </th>
                            <th>Ulasan   </th>
                         
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </table>
                    </form>
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
