<?php
    require_once "connection.php";

    class User extends Connection{

        public function createUser($first_name,$last_name,$username,$password){
            $sql = "INSERT INTO users (first_name,last_name,username,`password`) VALUES('$first_name','$last_name','$username','$password')";

            if($this->conn->query($sql)){
                header("location: ../views");
                exit;
            }else{
                die("Error in creating user".$this->conn->error);
            }
        }

        public function login($username,$password){
            $sql = "SELECT * FROM users WHERE username = '$username'";

            $result = $this->conn->query($sql);
            if($result->num_rows == 1){
                $user_details = $result->fetch_assoc();
                if(password_verify($password,$user_details['password'])){
                    session_start();

                    $_SESSION['user_id'] = $user_details['id'];
                    $_SESSION['first_name'] = $user_details['first_name'];
                    $_SESSION['last_name'] = $user_details['last_name'];
                    $_SESSION['username'] = $user_details['username'];
                    header("location: ../views/dashboard.php");
                    exit;
                }else{
                    die("Password is incorrect");
                }
            }else{
                die("Username not found");
            }

        }

        public function getProducts(){
            $sql = "SELECT id,product_name,price,quantity FROM products";

            if($result = $this->conn->query($sql)){
                while($row = $result->fetch_assoc()){
                    $products[] = $row;
                }
                return $products;
            }else{
                die("Error in retrieving products".$this->conn->error);
            }
        }

        public function addProducts($product_name,$price,$quantity){
            $sql = "INSERT INTO products(product_name,price,quantity) VALUES('$product_name','$price','$quantity') ";

            if($this->conn->query($sql)){
                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("Error in adding products".$this->conn->error);
            }
        }

        public function getSpecificProduct($user_id){
            $sql = "SELECT * FROM products WHERE id = '$user_id'";

            if ( $result = $this->conn->query($sql) ){
                return $result->fetch_assoc();
            }else{
                die ( "ERROR in retrieving product:" .$this->conn->error );
            }
        }

        public function updateProduct($product_id,$product_name,$price,$quantity){
            $sql = "UPDATE products
                    SET product_name = '$product_name',
                        price = '$price',
                        quantity = '$quantity'
                    WHERE id = '$product_id'
                    ";

            if( $this->conn->query($sql) ){
                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("ERROR in updating product:".$this->conn->error);
            }
        }

        public function deleteProduct($product_id){
            $sql = "DELETE FROM products WHERE id = '$product_id'";

            if( $this->conn->query($sql) ){
                header("location: ../views/dashboard.php");
                exit;
            }else{
                die("ERROR in deleting user:".$this->conn->error);
            }
        }

        public function displayTotalPrice($product_id){
            
            $sql  = "SELECT price FROM products WHERE id = '$product_id'";

            
            $num = $_POST['num'];
            
            if($result = $this->conn->query($sql) ){
                header("location: ../views/payment.php");
                print_r($result);
                exit;

            }else{
                die("ERROR in calculating price:".$this->conn->error);
            }

            
            

            // if($result->num_rows ==1){
            //     $totalPrice = $result * $num;
            //     echo $totalPrice;
            // }else{
            //     echo "No product";
            // }


        }

        public function logout(){
            session_start() ;
            session_unset();
            session_destroy();
            header("location: ../views/login.php");
            exit;
        }

        public function compareQuantity(){
            $num = $_POST['num'];
            $quantity = $_POST['quantity'];

            if($quantity >= $num){
                

            }else{
                echo "No stock.";
            }
        }




    }


?>






