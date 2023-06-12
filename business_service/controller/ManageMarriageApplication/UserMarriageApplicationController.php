<?php

require_once "../../../database/connection.php";

class UserMarriageApplication {
    private $conn;
    
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function createMarriageApp($MA_Address, $MA_State, $MA_MasKahwin, $MA_Category, $MA_Nation, $MA_ApplyDate) {
        $stmt = $this->conn->prepare("INSERT INTO marriage_application(MA_Address, MA_State, MA_MasKahwin, MA_Category, MA_Nation, MA_ApplyDate) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $MA_Address, $MA_State, $MA_MasKahwin, $MA_Category, $MA_Nation, $MA_ApplyDate);

        if ($stmt->execute() === TRUE) {
            echo "<script>alert('MARRIAGE APPLICATION IS SAVED')</script>";
        } else {
            echo "Error creating marriage application: " . $stmt->error;
        }

        $stmt->close();
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['MA_Address']) && isset($_POST['MA_State']) && isset($_POST['MA_MasKahwin']) && isset($_POST['MA_Category']) && isset($_POST['MA_Nation']) && isset($_POST['MA_ApplyDate'])) {
        $MA_Address = $_POST['MA_Address'];
        $MA_State = $_POST['MA_State'];
        $MA_MasKahwin = $_POST['MA_MasKahwin'];
        $MA_Category = $_POST['MA_Category'];
        $MA_Nation = $_POST['MA_Nation'];
        $MA_ApplyDate = $_POST['MA_ApplyDate'];
        
        $db = new UserMarriageApplication();
        $db->createMarriageApp($MA_Address, $MA_State, $MA_MasKahwin, $MA_Category, $MA_Nation, $MA_ApplyDate);
        $db->closeConnection();
    }
}