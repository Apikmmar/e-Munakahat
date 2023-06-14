<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'e-munakahat'); 
// Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}

Class AccountRegistrationModel {

    private $conn;
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }
    
    public function getUserIC($icnum) {
        $query = "SELECT * FROM user_registration_info WHERE User_IC = '$icnum'";
        $result = mysqli_query($this->conn, $query);
        
    }

}
?>