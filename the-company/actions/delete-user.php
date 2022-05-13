<?php

    include "../classes/User.php";

    $user = new User;

    $user_id = $_GET['user_id'];

    $user->deleteUser($_GET['user_id']);


?>