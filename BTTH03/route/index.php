<?php
    require_once('/xampp/htdocs/BTTH03/config/config.php');
    $controller = isset($_GET['controller'])? $_GET['controller'] : null;
    $action = isset($_GET['action'])? $_GET['action'] : null;
    switch($controller){
        case 'student':
            require_once('/xampp/htdocs/BTTH03/controller/StudentController.php');
            $studentController = new StudentController();
            switch($action){
                case 'list': 
                    $studentController->index();
                    break;
                case 'add':
                    $studentController->add();
                    break;
            }
    }
    //echo APP_ROOT.'/controller/StudentController.php';
?>