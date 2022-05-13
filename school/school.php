<?php
    class Calculate{
        public $price ;
        public $level ;
        public $name;
        public $num;
        public $lab;
        public $totalPrice;



        public function setValues($new_name,$new_level,$new_num,$new_lab){
            $this -> name = $new_name;
            $this -> level = $new_level;
            $this -> num = $new_num;
            $this -> lab = $new_lab;

        }

        public function getPrice(){
        if($this->lab == "with_lab"){
            
            if($this->level == 1){
                return ($this->num * 550) + 3359;
            }elseif($this->level == 2){
                return ($this->num * 630) +4000;
            }elseif($this->level == 3){
                return ($this->num * 470) +2890;
            }elseif($this->level == 4){
                return ($this->num * 501) +3555;
            }
        }else{
            if($this->level == 1){
                return $this->num * 550;
            }elseif($this->level == 2){
                return $this->num * 630;
            }elseif($this->level == 3){
                return $this->num * 470;
            }elseif($this->level == 4){
                return $this->num * 501;
            }
        }

        

        }
    }

?>