<?php
    class School{
        
        private $name;
        private $level;
        private $num;
        private $lab;
        private $unit_price = ["1"=> 550,"2"=>630,"3"=>470,"4"=>501];
        private $lab_price = ["1"=> 3359,"2"=>4000,"3"=>2890,"4"=>3555];

        public function setValues($name,$level,$num,$lab,){
            $this -> name = $name;
            $this -> level = $level;
            $this -> num = $num;
            $this -> lab = $lab;

        }

        public function calculateValues(){
            if($this->lab == "with_lab"){
                return $this->num * $this->unit_price[$this->level] + $this->lab_price[$this->level];
            }else{
                return $this->num * $this->unit_price[$this->level];
            }
        }

    }

?>