<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat'); 
// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

class staffAccountRegistration {
    private $conn;
    
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function registerData($icnum, $name, $jawatan, $paid, $akses, $emel, $phonenum){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve form data
            $icnum = mysqli_real_escape_string($this->conn, $_POST['icnum']);
            $name = mysqli_real_escape_string($this->conn, $_POST['name']);
            $jawatan = mysqli_real_escape_string($this->conn, $_POST['jawatan']);
            $paid = mysqli_real_escape_string($this->conn, $_POST['paid']);
            $akses = mysqli_real_escape_string($this->conn, $_POST['akses']);
            $emel = mysqli_real_escape_string($this->conn, $_POST['emel']);
            $phonenum = $_POST['phonenum'];
            $password = mysqli_real_escape_string($this->conn, $_POST['icnum']);

            $controller = new staffAccountRegistration();
            $result = $controller->getGender($icnum);
            $gender = $result['gender'];

            // Perform validation
            $errors = array();
            // Check if icnum already exists in the database
            $query = "SELECT * FROM staff_registration_info WHERE Staff_IC = '$icnum'";
            $result = mysqli_query($this->conn, $query);
            if (mysqli_num_rows($result) > 0) {
            $errors[] = "Nombor kad pengenalan sudah wujud. Sila masukkan nombor kad pengenalan yang lain.";
            }

            // If there are no validation errors, proceed to store the data in the database
            if (empty($errors)) {
                // Prepare and execute the SQL query
                $sql = "INSERT INTO staff_registration_info (Staff_IC, Staff_Name, Staff_Gender, Staff_PhoneNo, Staff_Email, Staff_Password, Staff_Position, Staff_PAID, Staff_AccessCategory) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param("sssssssss", $icnum, $name, $gender, $phonenum, $emel, $password, $jawatan, $paid, $akses);
                $stmt->execute();

                // Close the database connection
                $stmt->close();

                header("Location: ../../../View/ManageStaffAccountRegistrationView/m1_staffUtility.php");
            } else {
                // Display validation errors
                $errorMessage = "Gagal membuat akaun baharu staff. Sila cuba semula.";
                header("Location: ../../../View/ManageUserAccountRegistrationView/m1_staffUtility.php?error=" . urlencode($errorMessage));
            }
          }
        
    }

    public function deleteStaff($icnum) {
        // Disable foreign key checks
        $this->conn->query('SET FOREIGN_KEY_CHECKS = 0');

        $sql = "DELETE FROM staff_registration_info WHERE Staff_IC=$icnum";

        if ($this->conn->query($sql) === TRUE) {
        header("Location: ../../../View/ManageUserAccountRegistrationView/m1_staffUtility.php");
        } else {
        echo "Error: " . $sql . "<br>";
        }

        // Re-enable foreign key checks
        $this->conn->query('SET FOREIGN_KEY_CHECKS = 1');

        $this->conn->close();
    }

    public function getGender($icnum){
        // Extract the gender from the IC number
        $genderDigit = substr($icnum, 11, 1);
        $gender = ($genderDigit % 2 == 0) ? 'Perempuan' : 'Lelaki';

        // Return the age and date of birth as an array
        return array(
            'gender' => $gender
        );
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

$db = new staffAccountRegistration();
$db->registerData($icnum, $name, $jawatan, $paid, $akses, $emel, $phonenum);
$db->closeConnection();
// Check if form is submitted

?>