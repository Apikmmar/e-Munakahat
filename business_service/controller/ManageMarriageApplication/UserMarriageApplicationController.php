<?php
    require_once "../../../database/connection.php";

    class UserMarriageApplication {
        private $conn;

        public function __construct() {
            global $conn;
            $this->conn = $GLOBALS['conn'];
        }

        public function generateTestID($length = 10) {
            $prefix = "Test";
            $remainingLength = $length - strlen($prefix);
            
            if ($remainingLength <= 0) {
                return $prefix;
            }
            
            $bytes = random_bytes(ceil($remainingLength / 2));
            $randomString = substr(bin2hex($bytes), 0, $remainingLength);
            
            return $prefix . $randomString;
        }

        public function createMarriageApplication($User_MarriageStatus, $User_IslamStatus, $Test_Date, $Test_ClinicName, $Test_Result, $Test_ClinicStaffName, $Test_ClinicStaffPos, $Wali_IC, $Wali_Name, $Wali_DOB, $Wali_Gender, $Wali_Hubungan, $Wali_Age, $Wali_HP, $Wali_NoSijilNikah, $Wali_Pelulus, $Wali_MarriageDate, $Wali_IslamStatus, $Saksi_IC, $Saksi_Name, $Saksi_Address, $Saksi_HP, $MA_Address, $MA_State, $MA_MasKahwin, $MA_Category, $MA_Nation, $MA_ApplyDate) {
            $registrationStmt = $this->conn->prepare("INSERT INTO user_registration_info(User_MarriageStatus, User_IslamStatus) 
                                                    VALUES (?, ?)");
            $registrationStmt->bind_param("ss", $User_MarriageStatus, $User_IslamStatus);

            $Test_ID = $this->generateTestID(10);
            $hivformStmt = $this->conn->prepare("INSERT INTO hiv_test_result(Test_ID, Test_Date, Test_ClinicName, Test_Result, Test_ClinicStaffName, Test_ClinicStaffPos) 
                                                VALUES (?, ?, ?, ?, ?, ?)");
            $hivformStmt->bind_param("ssssss", $Test_ID, $Test_Date, $Test_ClinicName, $Test_Result, $Test_ClinicStaffName, $Test_ClinicStaffPos);

            $waliStmt =  $this->conn->prepare("INSERT INTO wali_info(Wali_IC, Wali_Name, Wali_DOB, Wali_Gender, Wali_Hubungan, Wali_Age, Wali_HP, Wali_NoSijilNikah, Wali_Pelulus, Wali_MarriageDate, Wali_IslamStatus) 
                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $waliStmt->bind_param("sssssssssss", $Wali_IC, $Wali_Name, $Wali_DOB, $Wali_Gender, $Wali_Hubungan, $Wali_Age, $Wali_HP, $Wali_NoSijilNikah, $Wali_Pelulus, $Wali_MarriageDate, $Wali_IslamStatus);

            $saksiStmt = $this->conn->prepare("INSERT INTO saksi_info(Saksi_IC, Saksi_Name, Saksi_Address, Saksi_HP) 
                                                VALUES (?, ?, ?, ?)");
            $saksiStmt->bind_param("ssss", $Saksi_IC, $Saksi_Name, $Saksi_Address, $Saksi_HP);

            $applicationStmt = $this->conn->prepare("INSERT INTO marriage_application(Test_ID, User_IC, Wali_IC, Saksi_IC, MA_Address, MA_State, MA_MasKahwin, MA_Category, MA_Nation, MA_ApplyDate) 
                                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $applicationStmt->bind_param("ssssssssss", $Test_ID, $User_IC, $Wali_IC, $Saksi_IC, $MA_Address, $MA_State, $MA_MasKahwin, $MA_Category, $MA_Nation, $MA_ApplyDate);

            if ($registrationStmt->execute() && $hivformStmt->execute() && $waliStmt->execute() && $saksiStmt->execute() && $applicationStmt->execute()) {
                echo "<script>alert('MARRIAGE APPLICATION IS SAVED'); window.location.href('../../../View/ManageUserMarriageApplication/m2_applycourse.php');</script>";
            } else {
                echo "Error creating marriage application: " . $registrationStmt->error . " - " . $applicationStmt->error;
            }

            $registrationStmt->close();
            $applicationStmt->close();
        }

        public function checkForeignKeys($Test_ID, $User_IC, $Wali_IC, $Saksi_IC) {
            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM hiv_test_result WHERE Test_ID = ?");
            $stmt->bind_param("s", $Test_ID);
            $stmt->execute();
            $stmt->bind_result($testCount);
            $stmt->fetch();
            $stmt->close();

            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM user_registration_info WHERE User_IC = ?");
            $stmt->bind_param("s", $User_IC);
            $stmt->execute();
            $stmt->bind_result($userCount);
            $stmt->fetch();
            $stmt->close();

            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM wali_info WHERE Wali_IC = ?");
            $stmt->bind_param("s", $Wali_IC);
            $stmt->execute();
            $stmt->bind_result($waliCount);
            $stmt->fetch();
            $stmt->close();

            $stmt = $this->conn->prepare("SELECT COUNT(*) FROM saksi_info WHERE Saksi_IC = ?");
            $stmt->bind_param("s", $Saksi_IC);
            $stmt->execute();
            $stmt->bind_result($saksiCount);
            $stmt->fetch();
            $stmt->close();

            return ($testCount === 1 && $userCount === 1 && $waliCount === 1 && $saksiCount === 1);
        }

        public function closeConnection() {
            $this->conn->close();
        }
    }

    // Handle form submission
    if (isset($_POST['daftarperkahwinan'])) {
        if (isset($_POST['User_MarriageStatus']) && isset($_POST['User_IslamStatus']) && isset($_POST['Test_Date']) && isset($_POST['Test_ClinicName']) && 
            isset($_POST['Test_Result']) && isset($_POST['Test_ClinicStaffName']) && isset($_POST['Test_ClinicStaffPos']) && isset($_POST['Wali_IC']) && 
            isset($_POST['Wali_Name']) && isset($_POST['Wali_DOB']) && isset($_POST['Wali_Gender']) && isset($_POST['Wali_Hubungan']) && isset($_POST['Wali_Age']) && 
            isset($_POST['Wali_HP']) && isset($_POST['Wali_NoSijilNikah']) && isset($_POST['Wali_Pelulus']) && isset($_POST['Wali_MarriageDate']) && 
            isset($_POST['Wali_IslamStatus']) && isset($_POST['Saksi_IC']) && isset($_POST['Saksi_Name']) && isset($_POST['Saksi_Address']) && 
            isset($_POST['Saksi_HP']) && isset($_POST['MA_Address']) && isset($_POST['MA_State']) && isset($_POST['MA_MasKahwin']) && 
            isset($_POST['MA_Category']) && isset($_POST['MA_Nation']) && isset($_POST['MA_ApplyDate'])) {

            $userMarriageApp = new UserMarriageApplication();

            $User_MarriageStatus = $_POST['User_MarriageStatus'];
            $User_IslamStatus = $_POST['User_IslamStatus'];

            $Test_Date = $_POST['Test_Date'];
            $Test_ClinicName = $_POST['Test_ClinicName'];
            $Test_Result = $_POST['Test_Result'];
            $Test_ClinicStaffName = $_POST['Test_ClinicStaffName'];
            $Test_ClinicStaffPos = $_POST['Test_ClinicStaffPos'];

            $Wali_IC = $_POST['Wali_IC'];
            $Wali_Name = $_POST['Wali_Name'];
            $Wali_DOB = $_POST['Wali_DOB'];
            $Wali_Gender = $_POST['Wali_Gender'];
            $Wali_Hubungan = $_POST['Wali_Hubungan'];
            $Wali_Age = $_POST['Wali_Age'];
            $Wali_HP = $_POST['Wali_HP'];
            $Wali_NoSijilNikah = $_POST['Wali_NoSijilNikah'];
            $Wali_Pelulus = $_POST['Wali_Pelulus'];
            $Wali_MarriageDate = $_POST['Wali_MarriageDate'];
            $Wali_IslamStatus = $_POST['Wali_IslamStatus'];

            $Saksi_IC = $_POST['Saksi_IC'];
            $Saksi_Name = $_POST['Saksi_Name'];
            $Saksi_Address = $_POST['Saksi_Address'];
            $Saksi_HP = $_POST['Saksi_HP'];

            $MA_Address = $_POST['MA_Address'];
            $MA_State = $_POST['MA_State'];
            $MA_MasKahwin = $_POST['MA_MasKahwin'];
            $MA_Category = $_POST['MA_Category'];
            $MA_Nation = $_POST['MA_Nation'];
            $MA_ApplyDate = $_POST['MA_ApplyDate'];

            if ($userMarriageApp->checkForeignKeys($Test_ID, $User_IC, $Wali_IC, $Saksi_IC)) {
                $userMarriageApp->createMarriageApplication($User_MarriageStatus, $User_IslamStatus, $Test_Date, $Test_ClinicName, 
                                                        $Test_Result, $Test_ClinicStaffName, $Test_ClinicStaffPos, $Wali_IC, $Wali_Name, 
                                                        $Wali_DOB, $Wali_Gender, $Wali_Hubungan, $Wali_Age, $Wali_HP, $Wali_NoSijilNikah, 
                                                        $Wali_Pelulus, $Wali_MarriageDate, $Wali_IslamStatus, $Saksi_IC, $Saksi_Name, 
                                                        $Saksi_Address, $Saksi_HP, $MA_Address, $MA_State, $MA_MasKahwin, 
                                                        $MA_Category, $MA_Nation, $MA_ApplyDate);
                $userMarriageApp->closeConnection();
            } else {
                echo "<script>alert('FOREIGN KEY VIOLATION');window.history.back();</script>";
            }
        } else {
            echo "<script>alert('MISSING FIELDS')window.history.back();</script>";
        }
    }
