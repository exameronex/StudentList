<?php	
    require '../bootstrap.php';
    if (!isset($_COOKIE['form'])) { 
        setcookie('form', 'edit', time() + 315360000, "/");
        $studentService->addStudent($_POST["name"], $_POST["lastName"], $_POST["gender"], $_POST["numberGroup"], $_POST["email"], $_POST["ege"], $_POST["yearBirthday"], $_POST["isLocal"]);
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
