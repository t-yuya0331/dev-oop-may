<?php
    class Fare{

        private $km;
        private $age;


        public function setValues($new_km,$new_age){
            $this -> km = $new_km;
            $this -> age = $new_age;

        }


        public function getPrice(){
            if($this->age < 60){
                if($this->km <= 4){
                    return  8;
                }else{
                    return 8+($this->km-4);
                }
            }

                if($this->age >= 60){
                    if($this->km <= 4){
                        return 8*.8;
                    }else{
                        return (8+($this->km-4))*.8;
                    }
                }


        }
    }


        




?>
        

        <?php
    // if(isset($_POST['submit'])){
    //         $calculate = new Calculate;

    //         $name = $_POST['name'];
    //         $level = $_POST['year_lev'];
    //         $num = $_POST['num'];

    //         $calculate->setValues($name,$level,$num);
    // }
    ?>

