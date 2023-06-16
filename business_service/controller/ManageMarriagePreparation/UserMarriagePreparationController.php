<?php

require_once "../../database/connection.php";

class UserMarriagePreparation {
    private $conn;
    
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function readMarriagePrepCourses() {
        $counter = 0;
        $courses = [];

        try {
            $sql = "SELECT MPC_PenganjurName, MPC_Address, MPC_Date, MPC_Time, MPC_Capacity FROM marriage_prep_course";

            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($results as $row) {
                $counter++;
                $course = [
                    'counter' => $counter,
                    'name' => $row['MPC_PenganjurName'],
                    'address' => $row['MPC_Address'],
                    'date' => $row['MPC_Date'],
                    'time' => $row['MPC_Time'],
                    'capacity' => $row['MPC_Capacity']
                ];
                $courses[] = $course;
            }
        } catch (PDOException $e) {
            die("Database query failed: " . $e->getMessage());
        }

        return $courses;
    }

    public function closeConnection() {
        $this->conn = null;
    }
}
