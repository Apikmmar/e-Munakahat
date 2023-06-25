<?php

require_once "../../../database/connection.php";

class StaffMarriageApplication {
    private $conn;
    
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function closeConnection() {
        $this->conn = null;
    }
}