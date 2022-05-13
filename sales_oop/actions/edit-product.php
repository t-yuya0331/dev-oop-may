<?php
    include "../classes/User.php";

    $product = new User;

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];


    $result = $product->updateProduct($product_id,$product_name,$price,$quantity);

    

?>