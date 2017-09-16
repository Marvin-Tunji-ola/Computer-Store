<?php
include('DBConnect.php');
if(isset($_COOKIE['electronicsstore'])){
    session_start();
    $_SESSION['electronicsstore'] = $_COOKIE['electronicsstore'];
    if(isset($_SESSION['electronicsstore'])){
        //db offset
        $_SESSION['computers'] = 0;
        $_SESSION['mobiles'] = 0;
        $_SESSION['accessories'] = 0;

        
        $session_status = 1;
        $session_id = $_SESSION['electronicsstore'];
        $sql = "SELECT name FROM users WHERE email ='$session_id'";
        include('DB_Get.php');
        $session_user = $data['name'];


    }else{

        $session_status = 0;
        $session_id = 'electronicsstore';
        $session_user = null;
    }

}else{

    $session_status = 0;
    $session_id = 'electronicsstore';
    $session_user = null;
}

?>
