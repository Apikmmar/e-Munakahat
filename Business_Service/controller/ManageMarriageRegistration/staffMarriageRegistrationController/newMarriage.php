<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat');
// Check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}

date_default_timezone_set('Asia/Kuala_Lumpur');
$date = date('Y-m-d'); // Get the current date
$time = date('H:i:s'); // Get the current time

// Create a new complaint
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $RegistrationNo = mysqli_real_escape_string($conn, $_POST['RegistrationNo']);
    $Registration_Date = mysqli_real_escape_string($conn, $_POST['Registration_Date']);
    $Registration_Status = "Untuk Diluluskan";
    $Accept_Date = mysqli_real_escape_string($conn, $_POST['Accept_Date']);

    $userid = "1";
    $staffid = "1";

    $sql = "INSERT INTO marriage_registration (RegistrationNo, Registration_Date, Registration_Status,Accept_Date, User_IC, Staff_IC)
                VALUES ('$RegistrationNo', '$Registration_Date', '$Registration_Status', '$Accept_Date', '$userid', '$staffid')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../../../../View/ManageMarriageRegistrationStaffView/m3_adminMarriageList.php");
    } else {
        echo "Error: " . $sql . "<br>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FK-EduSearch | Knowledge Sharing System</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- external stylesheet -->
    <link rel="stylesheet" href="../../../../View/assets/css/function.css">
</head>

<body>
    <!-- title bar -->
    <div id="title-bar">
        <!-- FK-EduSearch -->
        <a id="FK-EduSearch" class="FK Edu-Search">FK-EduSearch</a>

        <!-- search bar -->
        <div class="searchbar">
            <input type="search" class="" placeholder="Search..." aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search" style="font-size:26px; color:white"></i>
            </span>
        </div>

        <!-- user profile -->
        <div>
            <a class="icon-link" href="#">
                User
                <i class="fas fa-user-circle" style="font-size:36px;color:white"></i>
            </a>
        </div>
    </div>

    <!-- wrapper -->
    <div class="wrapper">
        <!-- navigation bar (left side) -->
        <nav id="nav-bar">
            <ul>
                <li><a class="nav-link" href="User/UserHomepage.php">Home</a></li>
                <li><a class="nav-link" href="User/UserAccountProfile.php">Account Profile</a></li>
                <li><a class="nav-link" href="User/UserDiscussionBoard.php">Discussion Board</a></li>
                <li><a class="nav-link active" href="User/UserComplaint.php">Complaint</a></li>
                <li><a class="nav-link" href="User/TotalPost.php">Total Post</a></li>
                <li><a class="nav-link" href="User/PostReport.php">Post Report</a></li>
                <li><a class="nav-link" href="login.php">Log Out</a></li>
            </ul>
        </nav>

        <!-- content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <h1>Create a New Complaint</h1>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="col-md-6">
                    <div class="">
                        <div class="form-body">
                            <form action="createcomplaintpage.php" method="POST">
                                <div class="form-group">
                                    <label for="date">Date: <?php echo date('Y-m-d'); ?></label><br>
                                    <label for="time">Time: <?php echo date('H:i:s'); ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="RegistrationNo">Permohonan No</label>
                                    <input type="text" name="RegistrationNo" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="Registration_Date">Tarikh permohonan</label>
                                    <input type="text" name="Registration_Date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="Registration_Status">Status Permohonan</label>
                                    <select id="Registration_Status" name="Registration_Status" class="form-control custom-select">
                                        <option selected disabled>Sila pilih status</option>
                                        <option value="Lulusk">Lulus</option>
                                        <option value="Untuk Diluluskan">Untuk Diluluskan</option>
                                        <option value="Gagal">Gagal</option>
                                    </select>
                                </div>
                        
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                        <a href="complaintmainpage.php" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </section>
        </div>
</body>

</html>


