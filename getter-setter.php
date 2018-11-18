<?php 
    class University {
        public $student;
        public $predikat;
        private $age;


        function __construct($student, $predikat, $age){
            $this->student = $student;
            $this->predikat = $predikat;
            $this->setAge($age);
        }
        function getAge(){
         return $this->age;
        }
         function setAge($age){
             if($age >= 18){
              return  $this->age = "kamu mahasiswa";                 
             } else {
               return  $this->age = "kamu bukan mahasiswa";
             }
         }
    
    }

    $university1 = new University("agung", "B+", 40);
        
    echo $university1->getAge();

?>