<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat'); 
// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

class ForgetPassword {
    private $conn;
    
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function forgetPasswordData($icnum, $email) {
        
        // Check if icnum already exists in the database
        $query = "SELECT * FROM user_registration_info WHERE User_IC = '$icnum'";
        $result = mysqli_query($this->conn, $query);
        
        if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['User_Password'];
        $storedEmail = $row['User_Email'];
        } else {
        $errorMessage = "Kad Pengenalan tidak wujud dalam sistem. Sila daftar masuk terlebih dahulu.";
        header("Location: ../../../View/ManageLoginView/m1_forgetpassword.php?error=" . urlencode($errorMessage));
        exit;
        }
        // Perform validation and password retrieval logic here
        if ($email === $storedEmail) {
        // Set up the email parameters
        $to = $email; // User's email address
        $subject = 'Password Recovery'; // Email subject
        $message = 'Your password is: ' . $storedPassword; // Message body
        $headers = 'From: TESTING@gmail.com'; // Sender's email address

        // Send the email
        $mailSent = mail($to, $subject, $message, $headers);
        // Check if the email was sent successfully
        if ($mailSent === true) {
            echo "Email sent successfully!";
            $successMessage = "Kata laluan berjaya dihantar ke emel. Sila cek emel anda.";
            header("Location: ../../../View/ManageLoginView/m1_login.php?success=" . urlencode($successMessage));
        } else {
            echo "Failed to send email.";
            $errorMessage = "Kata laluan gagal dihantar. Sila masukkan maklumat dengan betul.";
            header("Location: ../../../View/ManageLoginView/m1_forgetpassword.php?error=" . urlencode($errorMessage));
        }
        //$successMessage = "Password reset link has been sent to your email: " . $email;
        //header("Location: m1_login.php?success=" . urlencode($successMessage));
        // Additional code for successful login if needed
        } else {
            $errorMessage = "Emel tidak sah. Sila pastikan emel yang dimasukkan adalah sah.";
            header("Location: ../../../View/ManageLoginView/m1_forgetpassword.php?error=" . urlencode($errorMessage));
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Perform server-side validation and processing
    $icnum = $_POST["icnum"];
    $email = $_POST["email"];

    $db = new ForgetPassword();
    $db->forgetPasswordData($icnum, $email);
    $db->closeConnection();
}
?>