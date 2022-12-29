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
        
        public function getLastIDStudent() {
            $sqlLastId = "SELECT LAST_INSERT_ID()";
                 
            return mysqli_fetch_assoc($this->conn->query($sqlLastId))["LAST_INSERT_ID()"];
        }

        public function getStudentById($idStudent) {
            $sql = "SELECT first_name, last_name, gender, group_number, email, ege_points, year_birth, is_local FROM Students WHERE id_student=$idStudent";
            
            return mysqli_fetch_assoc($this->conn->query($sql));
        }

        public function updateStudentById($studById, $idStudent) {
            $sql = "UPDATE Students SET first_name = '{$studById["name"]}', last_name = '{$studById["lastName"]}', gender = {$studById["gender"]}, group_number = '{$studById["numberGroup"]}', email = '{$studById["email"]}', ege_points = {$studById["ege"]}, year_birth = {$studById["yearBirthday"]}, is_local = {$studById["isLocal"]} WHERE id_student = $idStudent";

            if(!($this->conn->query($sql))){
                echo "Ошибка: " . $this->conn->error;
            }
        }
    }