<?php

class AccountRegistrationModel {
    private $db;

    public function __construct() {
        // Create a new instance of the Database class
        $this->db = new Database();
    }
    public function getUserByIC($icnum) {
        $query = "SELECT * FROM user_registration_info WHERE User_IC = $icnum";
        return $this->db->execute($query)[0];
    }
    public function getStaff() {
        $query = "SELECT * FROM staff_registration_info";
        return $this->db->execute($query);
    }

    public function getStaffByIC($icnum) {
        $query = "SELECT * FROM staff_registration_info WHERE Staff_IC = $icnum";
        return $this->db->execute($query)[0];
    }

}
?>