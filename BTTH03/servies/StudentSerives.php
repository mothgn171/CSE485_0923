<?php
require_once('/xampp/htdocs/BTTH03/models/Student.php');
class StudentServies{
    private $listofstudent;
    public function __construct()
    {
        $this->listofstudent = [];
        $st01 = new student('01','hello','nguyen17@gmail.com','63CNTT','17/01');
        $st02 = new student('02','he','hai@gmail.com','Y','11/1/2023');
        $st03 = new student('03','heo','hai@gmail.com','YY','11/1/2023');
        $st04 = new student('04','h','avsdhvi@gmail.com','CY','11/1/2023');
        $st05 = new student('05','hell','sjvji@gmail.com','CNYY','11/1/2102');
        array_push($this->listofstudent,$st01,$st02, $st03, $st04 ,$st05); 
    }
    public function getAllstudent(){       
        return $this->listofstudent;
    }
    public function add($studentAdd){
        foreach($this->listofstudent as $student){
            if($student->getid() == $studentAdd->getid()){
                header("location: http://localhost/BTTH03/route/index.php?controller=studentc&action=list&error=cannot_add");
            }
        }
        array_push($this->listofstudent, $studentAdd);
        header("location: http://localhost/BTTH03/route/index.php?controller=student&action=list&success=add_successful");
    }
}

?>