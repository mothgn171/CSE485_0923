<?php
require_once('/xampp/htdocs/BTTH03/servies/StudentSerives.php');
require_once('/xampp/htdocs/BTTH03/models/student.php');
class StudentController{
    public function index(){
        $studentServices = new StudentServies();
        $students = $studentServices->getAllstudent();
        include '/xampp/htdocs/BTTH03/views/student/index.php';
        
    }
    public function add(){
        if(isset($_POST['btnAdd'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $grade = $_POST['grade'];
            $date = $_POST['date'];
            $student = new student($id, $name, $email, $grade, $date);
            $studentServices = new StudentServies();
            $studentServices->add($student);
            // Gọi phương thức addStudent để thêm sinh viên
            // $studentController->add($id, $name, $email, $grade, $date);
                    }
        
        include '/xampp/htdocs/BTTH03/views/student/add.php';
    }
}

?>