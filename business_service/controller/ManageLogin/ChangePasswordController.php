<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat'); 
// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

class ChangePassword {
    private $conn;
    
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function changePasswordData($icnum, $password, $newPassword, $confirmPassword){ 
        // Check if icnum already exists in the database
        $query = "SELECT * FROM user_registration_info WHERE User_IC = '$icnum'";
        $result = mysqli_query($this->conn, $query);
        
        if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['User_Password'];
        } else {
        $errorMessage = "Kad Pengenalan tidak wujud dalam sistem. Sila daftar masuk terlebih dahulu.";
        header("Location: ../../../View/ManageLoginView/m1_changepassword.php?error=" . urlencode($errorMessage));
        exit;
        }
        if ($password === $storedPassword) {
        if ($newPassword === $confirmPassword) {
            echo "Change successful!";
            $updateSql = "UPDATE user_registration_info SET User_Password = '$newPassword' WHERE User_IC = '$icnum'";
            $update = mysqli_query($this->conn, $updateSql);
            $successMessage = "Kata Laluan berjaya ditukar.";
            header("Location: ../../../View/ManageLoginView/m1_login.php?success=" . urlencode($successMessage));
            exit;
        } else {
            $errorMessage = "Kata Laluan Baru dan Ulang Kata Laluan Baru tidak sama. Sila pastikan Ulang Kata Laluan Baru sama dengan Kata Laluan Baru.";
            header("Location: ../../../View/ManageLoginView/m1_changepassword.php?error=" . urlencode($errorMessage));
            exit;
        }
        } else {
            $errorMessage = "Kata Laluan tidak sah. Sila masukkan semula kata laluan yang sah.";
            header("Location: ../../../View/ManageLoginView/m1_changepassword.php?error=" . urlencode($errorMessage));
            exit;
        }
        }

    public function closeConnection() {
        $this->conn->close();
    }
}
// Perform server-side validation and processing
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $icnum = $_POST['icnum'];
    $password = $_POST['password'];
    $newPassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
    $confirmPassword = $_POST['confirmpassword'];
    
    $db = new ChangePassword();
    $db->changePasswordData($icnum, $password, $newPassword, $confirmPassword);
    $db->closeConnection();
  }
?>