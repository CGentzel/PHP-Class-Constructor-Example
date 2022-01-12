<?php
      
    class Student {
        public static $NUM_STUDENTS = 0;
        
        //Properties
        private $Student_ID;
        private $Student_Name;
        private $Midterm_Score;
        private $FinalExam_Score;
        
        
        //constructor function
        function __construct($Student_ID, $Student_Name, $Midterm_Score, $FinalExam_Score){
            $this->Student_ID = $Student_ID;
            $this->Student_Name = $Student_Name;
            $this->Midterm_Score = $Midterm_Score;
            $this->FinalExam_Score = $FinalExam_Score;
            self::$NUM_STUDENTS += 1;
        }
        
        //getter functions
        public function getID(){
            return $this->Student_ID;
        }
        public function getName(){
            return $this->Student_Name;
        }
        public function getMidterm(){
            return $this->Midterm_Score;
        }
        public function getFinal(){
            return $this->FinalExam_Score;
        }
    }    //end class


?>