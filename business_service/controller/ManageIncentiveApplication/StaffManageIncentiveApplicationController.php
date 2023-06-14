<?php

require_once "../database/connection.php";

class StaffMarriageApplication
{
    private $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function staffIA_update($applydate, $status, $akuanbank, $namabank, $tempatlahir, $tempatlahirpasangan,$namawaris,$hubunganwaris,$notelwaris)
    {
        $stmt = $this->conn->prepare("INSERT INTO incentive_application(IA_ApplyDate, IA_Status, IA_BankAccount	, IA_BankName, IA_POB, IA_PartnerPOB) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $applydate, $status, $akuanbank, $namabank, $tempatlahir, $tempatlahirpasangan);

        if ($stmt->execute() === TRUE) {
            echo "<script>alert('INCENTIVE APPLICATION IS SAVED')</script>";
        } else {
            echo "Error creating incentive application: " . $stmt->error;
        }

        $stmt->close();
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['namawaris']) && isset($_POST['hubunganwaris']) && isset($_POST['notelwaris'])) {
        $namawaris = $_POST['namawaris'];
        $hubunganwaris = $_POST['hubunganwaris'];
        $notelwaris = $_POST['notelwaris'];
        $pendapatanpasangan = $_SESSION['pendapatanpasangan'];
        $tempatlahirpasangan = $_SESSION['tempatlahirpasangan'];
        $tempatlahir = $_SESSION['tempatlahir']=
        $akuanbank = $_SESSION['akuanbank'];
        $namabank = $_SESSION['namabank'];
        $applydate = date("d-m-Y");
        $status = "Dalam Proses";

        $db = new UserMarriageApplication();
        $db->userIA_create($MA_Address, $MA_State, $MA_MasKahwin, $MA_Category, $MA_Nation, $MA_ApplyDate);
        $db->closeConnection();
    }
}