<?php
// Create connection
session_start();
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

    public function staffIA_update($IA_ID, $status)
    {

        $updateSql = "UPDATE incentive_application SET IA_Status = '$status' WHERE IA_ID = '$IA_ID'";
        $update = mysqli_query($this->conn, $updateSql);
        echo $IA_ID;
        echo $status;

        $successMessage = "Berjaya ubah status.";
        header("Location: ../../../View/ManageIncentiveApplicationStaffView/m5_staffMainPage.php?success=" . urlencode($successMessage));
        exit;
    }

    public function staffIA_delete($IA_ID)
    {

        $deleteSql = "delete from incentive_application WHERE IA_ID = '$IA_ID'";
        $delete = mysqli_query($this->conn, $deleteSql);

        $successMessage = "Berjaya delete.";
        header("Location: ../../../View/ManageIncentiveApplicationStaffView/m5_staffMainPage.php?success=" . urlencode($successMessage));
        exit;
    }



    public function closeConnection()
    {
        $this->conn->close();
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $status = $_POST['status'];
    $IA_ID = $_SESSION['IA_ID'];

    $db = new IncentiveApplication();
    $db->staffIA_update($IA_ID, $status);
    $db->closeConnection();
}else{
    $IA_ID = $_GET['IA_ID'];
    $db = new IncentiveApplication();
    $db->staffIA_delete($IA_ID);
    $db->closeConnection();
}