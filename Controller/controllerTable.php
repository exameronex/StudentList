<?php	
    require '../bootstrap.php';
    if (!isset($_COOKIE['form'])) { 
        setcookie('form', 'edit', time() + 315360000, "/");
        $studentService->addStudent($_POST["name"], $_POST["lastName"], $_POST["gender"], $_POST["numberGroup"], $_POST["email"], $_POST["ege"], $_POST["yearBirthday"], $_POST["isLocal"]);
        if (!isset($_COOKIE['id'])) { 
            setcookie('id', $studentService->getLastIDStudent(), time() + 315360000, "/");
        }        
    } elseif(isset($_POST['name'])) {
            $studById = $studentService->getStudentById($_COOKIE['id']);
            if($_POST["name"] != $studById["first_name"] || $_POST["lastName"] != $studById["last_name"] || $_POST["gender"] != $studById["gender"] || $_POST["numberGroup"] != $studById["group_number"] || $_POST["email"] != $studById["email"] || $_POST["ege"] != $studById["ege_points"] || $_POST["yearBirthday"] != $studById["year_birth"] || $_POST["isLocal"] != $studById["is_local"]) {
                $studentService->updateStudentById($_POST, $_COOKIE['id']);
            }
    }       

    if (isset($_GET['page'])){
        $page = $_GET['page'];
     } else {
        $page = 1;
    }        

    $art = ($page-1) * 50;    

    $arrStud = $studentService->getStudentForOnePage($art); 

    $studentsCount = mysqli_fetch_assoc($studentService->getCountPage())["COUNT(*)"];
    $strPage = ceil($studentsCount / 50);  
    require '../View/table.php';
   ?>
