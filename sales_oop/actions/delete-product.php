<?php

    include "../classes/User.php";

    $product = new User;

    // $product_id = $_GET['product_id'];

    $product->deleteProduct($_GET['product_id']);


?>