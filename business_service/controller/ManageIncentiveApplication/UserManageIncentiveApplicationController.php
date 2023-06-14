<?php

require_once "../database/connection.php";

class UserIncentiveApplication
{
    private $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function staffIA_update($status)
    {
        $stmt = $this->conn->prepare("INSERT INTO incentive_application(IA_ApplyDate, IA_Status, IA_BankAccount	, IA_BankName, IA_POB, IA_PartnerPOB) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("s", $status);

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
    if (isset($_POST['status'])) {
        $status = $_POST['status'];

        $db = new UserMarriageApplication();
        $db->staffIA_update($status);
        $db->closeConnection();
    }
}