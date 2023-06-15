<?php

class IncentiveApplicationModel {
    private $db;

    public function __construct() {
        // Create a new instance of the Database class
    }

    public function getApplication() {
        $query = "SELECT * FROM incentive_application";
        return $this->db->execute($query);
    }

}
?>