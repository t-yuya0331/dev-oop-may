<?php
    class Income{
        private $name;
        private $status;
        private $position;
        private $em_status;
        private $num;
        private $tax;
        private $health;
        private $get_pay;
        
        private $regular_pay = [
            "staff"=> ["contractual"=>300,"probationary"=>350,"regular"=>400,],
            "admin"=>["contractual"=>350,"probationary"=>400,"regular"=>500]
        ];
        
        private $over_pay = [
            "staff"=> ["contractual"=>10,"probationary"=>25,"regular"=>30],
            "admin"=>["contractual"=>15,"probationary"=>30,"regular"=>40]
        ];



        public function __construct($name,$status,$position,$em_status,$num,$health,$get_pay,$total_income){
            $this->name =$name;
            $this->status =$status;
            $this->position =$position;
            $this->em_status =$em_status;
            $this->num =$num;
            $this->health =$health;
            $this->get_pay = $get_pay;
            $this->total_income = $total_income;

            
        }

        public function getOt(){
            if($this->num > 40){
                return $this->num - 40;
            }else{
                return 0;
            }
        }

        public function getOp(){
            if($this->num > 40){
                return ($this->num - 40) * $this->over_pay[$this->position][$this->em_status];
            }else{
                return 0;
            }
        }

        public function regularPay(){
            if($this->num >= 40){
                return 5 * $this->regular_pay[$this->position][$this->em_status];
            } elseif($this->num < 40){
                return ($this->num /8)* $this->regular_pay[$this->position][$this->em_status];
            }
        }

    public function grossIncome(){
        if($this->num == 40){
            $this->get_pay = 5 * $this->regular_pay[$this->position][$this->em_status];
        }elseif($this->num > 40){
            $this->get_pay = (5 * $this->regular_pay[$this->position][$this->em_status]) + (($this->num - 40) * $this->over_pay[$this->position][$this->em_status]);
        }elseif($this->num < 40){
            $this->get_pay = ($this->num /8)* $this->regular_pay[$this->position][$this->em_status];
        }return $this->get_pay;
        
    }

    public function getTax(){
        
        if($this->status == "single" && $this->get_pay > 1000){
            $this->tax = $this->get_pay * .05;
        }elseif($this->status == "single" && $this->get_pay <= 1000){
            $this->tax = 0;
        }elseif($this->status == "married" && $this->get_pay > 1500){
            $this->tax = $this->get_pay * .03;
        }elseif($this->status == "married" && $this->get_pay <= 1500){
            $this->tax = 0;
        }return $this->tax;
    }

    public function getHealth(){
        if($this->status == "single"){
            $this->health = 200;
        }elseif($this->status == "married"){
            $this->health = 75;
    }return $this->health;
    }

    public function netIncome(){
        return $this->total_income = $this->get_pay - ($this->tax + $this->health);
    }
}
?>