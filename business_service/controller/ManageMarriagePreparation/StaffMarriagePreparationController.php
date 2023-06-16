<?php

    require_once "../../../database/connection.php";

    class StaffMarriagePreparation {
        private $conn;
        
        public function __construct() {
            global $conn;
            $this->conn = $conn;
        }

        public function generateRandomString($length = 10) {
            $bytes = random_bytes(ceil($length / 2));
            return substr(bin2hex($bytes), 0, $length);
        }

        public function createNewPreparationCourse($MPC_PenganjurName, $MPC_Address, $MPC_Date, $MPC_Time, $MPC_Capacity, $Staff_IC) {
            // Generate a random VARCHAR value for MPC_SiriTaklimat
            $MPC_SiriTaklimat = $this->generateRandomString(10); 

            // insert into database
            $stmt = $this->conn->prepare("INSERT INTO marriage_prep_course (MPC_SiriTaklimat, MPC_PenganjurName, MPC_Address, MPC_Date, MPC_Time, MPC_Capacity) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $MPC_SiriTaklimat);
            $stmt->bindParam(2, $MPC_PenganjurName);
            $stmt->bindParam(3, $MPC_Address);
            $stmt->bindParam(4, $MPC_Date);
            $stmt->bindParam(5, $MPC_Time);
            $stmt->bindParam(6, $MPC_Capacity);

            // execution if stat
            if ($stmt->execute() === TRUE) {
                echo "<script>alert('MARRIAGE PREPARATION COURSE IS CREATED');window.history.back();</script>";
            } else {
                echo "Error creating marriage preparation course: " . $stmt->errorInfo()[2];
            }

            $stmt->closeCursor();
        }

        public function readPreparationCourses() {
            $counter = 0;
            $courses = [];
        
            try {
                $sql = "SELECT MPC_SiriTaklimat, MPC_Address, MPC_Date, MPC_Time, MPC_Capacity FROM marriage_prep_course";
        
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
        
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
                foreach ($results as $row) {
                    $counter++;
                    $course = [
                        'counter' => $counter,
                        'siritaklimat' => $row['MPC_SiriTaklimat'],
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


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $db = new StaffMarriagePreparation();

        // submit post
        if(isset($_POST['createNewPreparationCourse'])) {
            $MPC_PenganjurName = $_POST['MPC_PenganjurName'];
            $MPC_Address = $_POST['MPC_Address'];
            $MPC_Date = $_POST['MPC_Date'];
            $MPC_Time = $_POST['MPC_Time'];
            $MPC_Capacity = $_POST['MPC_Capacity'];
            $Staff_IC  = $_POST['Staff_IC'];

            $db->createNewPreparationCourse($MPC_PenganjurName, $MPC_Address, $MPC_Date, $MPC_Time, $MPC_Capacity, $Staff_IC);
            $db->closeConnection();
        }
    }