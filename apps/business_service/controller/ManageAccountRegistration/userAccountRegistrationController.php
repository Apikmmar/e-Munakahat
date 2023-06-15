<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat'); 
// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

class Register {
    private $conn;
    
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function registerData($icnum, $name, $dob, $gender, $bangsa, $warga, $address, $currentaddress, $age, $phonenum, $pendidikan, $pekerjaan, $jobAddress, $email, $password){
        // Perform validation
        $errors = array();

        // Check if icnum already exists in the database
        $query = "SELECT * FROM user_registration_info WHERE User_IC = '$icnum'";
        $result = mysqli_query($this->conn, $query);

        if (mysqli_num_rows($result) > 0) {
        $errors[] = "IC number already exists. Please choose a different IC number.";
        }

        // If there are no validation errors, proceed to store the data in the database
        if (empty($errors)) {
        // Prepare and execute the SQL query
        $sql = "INSERT INTO user_registration_info (User_IC, User_Name, User_DOB, User_Gender, User_Race, User_Nationality, User_AddressInIC, User_Address, User_Age, User_HP, User_Edu, User_JobSector, User_JobAddress, User_Email, User_Password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssssssssssssss", $icnum, $name, $dob, $gender, $bangsa, $warga, $address, $currentaddress, $age, $phonenum, $pendidikan, $pekerjaan, $jobAddress, $email, $password);
        $stmt->execute();

        // Close the database connection
        $stmt->close();

        // Display success message
        $successMessage = "Data has been successfully stored in the database.";
        header("Location: ../../../View//ManageLoginView/m1_login.php?success=" . urlencode($successMessage));
        } else {
        // Display validation errors
        $errorMessage = "Nombor kad pengenalan sudah wujud dalam sistem. Sila pilih nombor kad pengenalan yang lain.";
        header("Location: ../../../View/ManageUserAccountRegistrationView/m1_register.php?error=" . urlencode($errorMessage));
        }
    }

    public function setICDetails($icnum){
        // Extract the date of birth from the IC number
        $dateOfBirth = substr($icnum, 0, 6);

        // Extract the birth year, month, and day from the date of birth
        $year = substr($dateOfBirth, 0, 2);
        $month = substr($dateOfBirth, 2, 2);
        $day = substr($dateOfBirth, 4, 2);

        // Determine the birth century based on the first digit of the IC number
        $birthCentury = '';
        $firstDigit = substr($icnum, 0, 1);
        if ($firstDigit == '0' || $firstDigit == '1' || $firstDigit == '2') {
            $birthCentury = '20'; // 20th century (1900 - 1999)
        } else {
            $birthCentury = '19'; // 21st century (2000 - 2099)
        } 

        // Calculate the birth year
        $birthYear = $birthCentury . $year;

        // Calculate the age based on the birth year
        $currentYear = date('Y');
        $age = $currentYear - $birthYear;

        // Extract the gender from the IC number
        $genderDigit = substr($icnum, 11, 1);
        $gender = ($genderDigit % 2 == 0) ? 'Perempuan' : 'Lelaki';

        // Return the age and date of birth as an array
        return array(
            'age' => $age,
            'gender' => $gender,
            'dateOfBirth' => "$birthYear-$month-$day"
        );
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $icnum = mysqli_real_escape_string($conn, $_POST['icnum']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $bangsa = mysqli_real_escape_string($conn, $_POST['bangsa']);
    $warga = mysqli_real_escape_string($conn, $_POST['warga']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $currentaddress = mysqli_real_escape_string($conn, $_POST['currentaddress']);
    $phonenum = $_POST['phonenum'];
    $pendidikan = mysqli_real_escape_string($conn, $_POST['pendidikan']);
    $pekerjaan = mysqli_real_escape_string($conn, $_POST['pekerjaan']);
    $jobAddress = mysqli_real_escape_string($conn, $_POST['jobAddress']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);

    $db = new Register();
    $result = $db->setICDetails($icnum);
    $age = $result['age'];
    $gender = $result['gender'];
    $dob = $result['dateOfBirth'];
    $db->registerData($icnum, $name, $dob, $gender, $bangsa, $warga, $address, $currentaddress, $age, $phonenum, $pendidikan, $pekerjaan, $jobAddress, $email, $password);
    $db->closeConnection();
  }
?>