<?php	
    require '../bootstrap.php';
    if (!isset($_COOKIE['form'])) { 
        setcookie('form', 'edit', time() + 315360000, "/");
    }


	
    

    // if (isset($_GET['page'])){
    //     $page = $_GET['page'];
    //  }else $page = 1;

    $studentService = new studentService;
    //$studentService->addStudent($_POST["name"], $_POST["lastName"], $_POST["gender"], $_POST["numberGroup"], $_POST["email"], $_POST["ege"], $_POST["yearBirthday"], $_POST["isLocal"]);
    
    $arrStud = $studentService->getAllStudent();



    //$studentsCount = $arrStud->num_rows;
    //$str_pag = ceil($studentsCount / 50);
    require '../View/table.php';

?>
