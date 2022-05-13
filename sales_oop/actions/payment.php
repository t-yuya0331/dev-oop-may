<?php
    include "../classes/user.php";

    $num = $_POST['num'];

    $user = new User;
    $user->displayTotalPrice($_GET['product_id']);

?>