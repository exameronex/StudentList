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

        public function getAllStudent() {
            $sql = "SELECT * FROM Students";
            $arrStud = $this->conn->query($sql);
     
            return $arrStud;
        } 
    }