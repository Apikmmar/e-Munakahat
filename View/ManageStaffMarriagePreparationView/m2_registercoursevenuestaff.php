<?php
    session_start();
    if (isset($_SESSION['icnum'])) {
        require '../../database/connection.php';

        $Staff_IC = $_SESSION['icnum'];

        $sql = "SELECT Staff_Name FROM Staff_registration_info WHERE Staff_IC = :Staff_ic";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':Staff_ic', $Staff_IC, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $Staff_Name = $result['Staff_Name'];
	    }
    }
    
    function readPreparationCourses() {
        require '../../database/connection.php';
        $counter = 0;
        $courses = [];

        try {
            $sql = "SELECT MPC_SiriTaklimat, MPC_Address, MPC_Date, MPC_Time, MPC_Capacity FROM marriage_prep_course";

            $stmt = $conn->prepare($sql);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $row) {
                $counter++;
                $course = [
                    'counter' => $counter,
                    'siritaklimat' => $row['MPC_SiriTaklimat'],
                    'address' => $row['MPC_Address'],
                    'date' => $row['MPC_Date'],
                    'time' => $row['MPC_Time'],
                    'capacity' => $row['MPC_Capacity']
                ];
                $courses[] = $course;
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }

        return $courses;
    }

    $courses = readPreparationCourses();
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
                        <button class="btn btn-secondary h6" id="staffprepcoursemainpage">Laman Utama</button>
                        <button class="btn btn-success h6" id="regcourseven">Maklumat Taklimat</button>
                        <button class="btn btn-success h6" id="appcourseapp">Maklumat Peserta</button>
                        <button class="btn btn-dark h6" id="staffloginmainpage">Kembali Ke e-Munakahat</button>
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
                <span class="h6 text-uppercase">DAFTAR TAKLIMAT</span>
            </div>
            <div class="content-of-module-admin">
                <form action="../../Business_Service/Controller/ManageMarriagePreparation/StaffMarriagePreparationController.php" method="post">
                    <div style="padding-left: 30px; padding-top: 5px;">
                        <em>[*] adalah wajib diisi</em>
                    </div>
                    <div class="d-flex flex-row">
                        
                        <div style="padding-left: 30px; padding-top: 10px; width: 600px;">
                            <div>
                                <label class="vcdlabel">Nama Penganjur :</label>
                                <input type="text" class="form-control-sm" id="inputboxstyle2" placeholder="Masukkan penganjur" name="MPC_PenganjurName" required>
                            </div>
                            <div>
                                <label class="vcdlabel">Tempat :</label>
                                <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan tempat" name="MPC_Address" required>
                            </div>
                            <div>
                                <label class="vcdlabel">Masa Dari :</label>
                                <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan alamat" name="MPC_Time" required>
                            </div>
                            <div>
                                <label class="vcdlabel">Pegawai Dihubungi :</label>
                                <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan masa" name="Staff_IC" required>
                            </div>
                            <div>
                                <label class="vcdlabel">No Telefon :</label>
                                <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan no telefon" name="Staff_HP" required>
                            </div>
                            <div style="display: flex;">
                                <label class="vcdlabel">Catatan :</label>
                                <textarea type="textarea" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan catatan" name="" required></textarea>
                            </div>
                        </div>
                        <div style="padding-left: 30px; padding-top: 10px; width: 600px;">
                            <div>
                                <label class="vcdlabel">Tarikh :</label>
                                <input type="text" class="form-control-sm datepicker" placeholder="Select date" name="MPC_Date" required>
                                <em>(dd-mm-yyyy)</em>
                            </div>
                            <div>
                                <label class="vcdlabel">Kapasiti :</label>
                                <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan kapasiti" name="MPC_Capacity" required>
                            </div>
                        <br><br>
                            <div>
                                <label class="vcdlabel">Masa Tamat :</label>
                                <input type="text" class="form-control form-control-sm" id="inputboxstyle2" placeholder="Masukkan masa" name="" required>
                            </div>
                            <br><br>
                            <div>
                                <label class="vcdlabel">Terbitkan kepada umum :</label>
                                <select class="form-select" aria-label="Default select example" id="inputboxstyle2" name="" required>
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
                        <button type="submit" class="btn btn-primary" name="createNewPreparationCourse">Simpan</button>
                        &nbsp;&nbsp;
                        <button type="btn" class="btn btn-primary" id="backbuttonstaff">Kembali</button>
                    </div>
                </form>
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
                        <?php foreach ($courses as $course) : ?>
                            <tr>
                                <td><?php echo $course['counter'] ?></td>
                                <td><?php echo $course['siritaklimat'] ?></td>
                                <td><?php echo $course['address'] ?></td>
                                <td><?php echo $course['time'] ?></td>
                                <td><?php echo $course['date'] ?></td>
                                <td><?php echo $course['capacity'] ?></td>
                                <td><img src="../assets/img/evaluation.png" alt="logopapar" class="imgflaticon" id=""></td>
                                <td><img src="../assets/img/add-user.png" alt="logodaftar" class="imgflaticon" id=""></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        </table>
                    </div>
                <br>
            </div>
        </div>
    </div>

    <td><img src="../assets/img/delete.png" alt="logopapar" class="imgflaticon" id=""></td>
    <td><img src="../assets/img/update.png" alt="logodaftar" class="imgflaticon" id=""></td>
    <td><img src="../assets/img/printer.png" alt="logodaftar" class="imgflaticon" id=""></td>

    <script src="../assets/js/javascript.js" defer></script>
    <script src="../assets/js/module2js.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/luxon@2.1.0/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>