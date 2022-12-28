<?php
    class StudentService
    {
        private $conn;
        
        public function __construct()
		{
			$this->conn = new mysqli("localhost", "root", "", "stud_list");
		}

        public function addStudent($firstName, $lastName, $gender, $groupNumber, $email, $ege, $yearBirth, $isLocal) {
        
            $sql = "INSERT INTO Students (first_name, last_name, gender, group_number, email, ege_points, year_birth, is_local) VALUES ('{$firstName}', '{$lastName}',{$gender},'{$groupNumber}', '{$email}', '{$ege}', '{$yearBirth}', {$isLocal})";
            if (!isset($_COOKIE['id'])) { 
                setcookie('id', 'edit', time() + 315360000, "/");
            }
            if(!($this->conn->query($sql))){
                echo "Ошибка: " . $this->conn->error;
            }
        }

        public function getStudentForOnePage($art) {
            $sql = "SELECT * FROM Students LIMIT $art, 50";
            $arrStud = $this->conn->query($sql);
     
            return $arrStud;
        } 

        public function getCountPage() {
            $sql = "SELECT COUNT(*) FROM Students";
                 
            return $this->conn->query($sql);
        } 
    }