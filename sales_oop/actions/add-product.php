<?php
    include "../classes/user.php";

    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $user = new User;
    $user->addProducts($product_name,$price,$quantity);


?>