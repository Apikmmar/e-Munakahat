<?php
session_start();

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat'); 
// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

if(isset($_SESSION['icnum'])) {
  header("Location: ../../../View/ManageUserAccountRegistrationView/m1_manageUserProfile.php");
  exit;
}

class Login {
    private $conn;
    
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function loginData($icnum, $password, $userType) {
        if ($userType === 'biasa') {
            // Check if icnum already exists in the database
            $query = "SELECT * FROM user_registration_info WHERE User_IC = '$icnum'";
            $result = mysqli_query($this->conn, $query);
    
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $storedPassword = $row['User_Password'];
            } else {
                $errorMessage = "Nombor kad pengenalan tidak wujud dalam sistem. Sila daftar masuk terlebih dahulu.";
                header("Location: ../../../View/ManageLoginView/m1_login.php?error=" . urlencode($errorMessage));
                exit;
            }
            if ($password === $storedPassword) {
                echo "Login successful!";
                $_SESSION['icnum'] = $icnum;
                header("Location: ../../../View/ManageUserAccountRegistrationView/m1_manageUserProfile.php?icnum=" . urlencode($icnum));
                exit;
            } else {
                $errorMessage = "Kata Laluan tidak sah. Sila masukkan semula kata laluan yang sah.";
                header("Location: ../../../View/ManageLoginView/m1_login.php?error=" . urlencode($errorMessage));
                exit;
            }
            } else if ($userType === 'staff') {
            // Check if icnum already exists in the database
            $query = "SELECT * FROM staff_registration_info WHERE Staff_IC = '$icnum'";
            $result = mysqli_query($this->conn, $query);
    
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $storedPassword = $row['Staff_Password'];
            } else {
                $errorMessage = "Nombor kad pengenalan tidak wujud dalam sistem.";
                header("Location: ../../../View/ManageLoginView/m1_login.php?error=" . urlencode($errorMessage));
                exit;
            }
            if ($password === $storedPassword) {
                echo "Login successful!";
                $_SESSION['icnum'] = $icnum;
                header("Location: ../../../View/ManageStaffAccountRegistrationView/m1_viewStaffProfile.php?icnum=" . urlencode($icnum));
                exit;
            } else {
                $errorMessage = "Kata Laluan tidak sah. Sila masukkan semula kata laluan yang sah.";
                header("Location: ../../../View/ManageLoginView/m1_login.php?error=" . urlencode($errorMessage));
                exit;
            }
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}
// Perform server-side validation and authentication
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Retrieve the submitted IC number and password
    $icnum = $_POST['icnum'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];
    
    $db = new Login();
    $db->loginData($icnum, $password, $userType);
    $db->closeConnection();
}