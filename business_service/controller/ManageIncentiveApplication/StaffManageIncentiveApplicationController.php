
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

    public function staffIA_edit($status)
    {
        $query = "SELECT * FROM incentive_application WHERE IA_ID = '$icnum'";
        $result = mysqli_query($this->conn, $query);
        $updateSql = "UPDATE incentive_application SET status = '$newPassword' WHERE User_IC = '$icnum'";
            $update = mysqli_query($this->conn, $updateSql);
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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['status'])) {
        $DI_SupportDocument = "status";
        

        $db = new IncentiveApplication();
        $db->userIA_create($applydate, $status, $akuanbank, $namabank, $tempatlahir, $tempatlahirpasangan,$pendapatanpasangan, $User_IC,$Staff_IC,$DI_ICCopy,$DI_AkadNikahCopy,$DI_BankAccountCopy,$DI_SupportDocument,$namawaris,$hubunganwaris,$notelwaris);
        $db->closeConnection();
    }
}
