<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat'); 
// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}


class IncentiveApplication
{
    private $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function userIA_create($applydate, $status, $akuanbank, $namabank, $tempatlahir, $tempatlahirpasangan,$pendapatanpasangan, $User_IC,$Staff_IC,$DI_ICCopy,$DI_AkadNikahCopy,$DI_BankAccountCopy,$DI_SupportDocument,$namawaris,$hubunganwaris,$notelwaris)
    {
        $sql = "INSERT INTO incentive_application(IA_ApplyDate, IA_Status, IA_BankAccount, IA_BankName, IA_POB, IA_PartnerPOB,IA_PartnerSalary,User_IC,Staff_IC,DI_ICCopy,DI_AkadNikahCopy,DI_BankAccountCopy,DI_SupportDocument,HI_Name,HI_Relationship,HI_PhoneNo) VALUES (?, ?, ?, ?, ?, ?,?,?, ?, ?, ?, ?,?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssssssssssssss", $applydate, $status, $akuanbank, $namabank, $tempatlahir, $tempatlahirpasangan,$pendapatanpasangan, $User_IC,$Staff_IC,$DI_ICCopy,$DI_AkadNikahCopy,$DI_BankAccountCopy,$DI_SupportDocument,$namawaris,$hubunganwaris,$notelwaris);
        $stmt->execute();

        if ($stmt->execute() === TRUE) {
            echo "<script>alert('INCENTIVE APPLICATION IS SAVED')</script>";
        } else {
            echo "Error creating incentive application: " . $stmt->error;
        }

        $stmt->close();
        $successMessage = "Data has been successfully stored in the database.";
        header("Location: ../../../View/ManageIncentiveApplicationView/m5_userMainPage.php?success=" . urlencode($successMessage));
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
        $tempatlahir = $_SESSION['tempatlahir'];
        $akuanbank = $_SESSION['akuanbank'];
        $namabank = $_SESSION['namabank'];
        $applydate = date("d-m-Y");
        $User_IC = "011221060079";
        $Staff_IC = "111221060079";
        $status = "Dalam Proses";
        $DI_ICCopy = "ICCopy";
        $DI_AkadNikahCopy = "AkadNikahCopy";
        $DI_BankAccountCopy = "DI_BankAccountCopy";
        $DI_SupportDocument = "DI_SupportDocument";
        

        $db = new IncentiveApplication();
        $db->userIA_create($applydate, $status, $akuanbank, $namabank, $tempatlahir, $tempatlahirpasangan,$pendapatanpasangan, $User_IC,$Staff_IC,$DI_ICCopy,$DI_AkadNikahCopy,$DI_BankAccountCopy,$DI_SupportDocument,$namawaris,$hubunganwaris,$notelwaris);
        $db->closeConnection();
    }
}