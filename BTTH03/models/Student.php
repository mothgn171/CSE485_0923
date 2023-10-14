<?php 
class Student{
    private $id;
    private $name;
    private $email;
    private $grade;
    private $date;
    

    public function __construct($id,$name, $email, $grade, $date)
    {
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->grade=$grade;
        $this->date=$date;
        
    }

    public function setid($id){
        $this->id=$id;
    }   
    public function getid(){
        return $this->id;
    }
    public function setname($name){
        $this->name=$name;
    }
    public function getname(){
        return $this->name;
    }
    public function setemail($email){
        $this->email=$email;
    }   
    public function getemail(){
        return $this->email;
    }
    public function setgrade($grade){
        $this->grade=$grade;
    }   
    public function getgrade(){
        return $this->grade;
    }public function setdate($date){
        $this->date=$date;
    }   
    public function getdate(){
        return $this->date;
    }
}
?>