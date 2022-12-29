<?php	
    require '../bootstrap.php';
    session_start();

    if (!isset($_SESSION['search'])){
        $_SESSION['search'] = $_POST['search'];
    }

    if (isset($_POST['search'])) {
        if ($_POST['search'] != $_SESSION['search']) {
            $_SESSION['search'] = $_POST['search'];
        }
    } 

    if (isset($_GET['page'])){
        $page = $_GET['page'];
     } else {
        $page = 1;
    }        

    $art = ($page-1) * 50;    

    $arrStud = $studentService->getStudentBySearchForOnePage($_SESSION['search'], $art);

    $studentsCount = mysqli_fetch_assoc($studentService->getCountPageBySearch($_SESSION['search']))["COUNT(*)"];
    $strPage = ceil($studentsCount / 50);  

    require '../View/tableSearch.php';

    
    