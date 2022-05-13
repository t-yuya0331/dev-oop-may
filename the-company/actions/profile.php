<?php
    session_start();

    include_once "../classes/User.php";


//$_FILES POINT

// $_FILESには、アップロードされたファイルの
// $_FILES['inputで指定したname']['name']：ファイル名
// $_FILES['inputで指定したname']['type']：ファイルのMIMEタイプ
// $_FILES['inputで指定したname']['tmp_name']：一時保存ファイル名
// $_FILES['inputで指定したname']['error']：アップロード時のエラーコード
// $_FILES['inputで指定したname']['size']：ファイルサイズ（バイト単位）
// の5種類のデータが格納される

    $user_id = $_SESSION['user_id'];
    $image_name = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];

    $user = new User;

    $user->uploadPhoto($user_id,$image_name,$tmp_name);

?>