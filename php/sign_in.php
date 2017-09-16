<?php

  include("DBConnect.php");
  if($DB_CONNECT -> connect_error){
        $message="Connection failed: ". $DB_CONNECT->connect_error;
       die($message);
  }else{
    //if POST is sent
    if(isset($_POST)){
      $email = $_POST['email'];
      $password = $_POST['password'];

      $sql = "SELECT email FROM users WHERE  email= '$email' AND password ='$password'";
      include('DB_GET.php');
        if($data == null){
        //return 0 (invalid)
        die("0");
        }else if($data['email'] ==$email){
            $DB_CONNECT->close();
            //set cookie
            $cookie_name = 'electronicsstore';
            $cookie_value = $email;
            setcookie($cookie_name, $cookie_value, time() + (86400*30), "/", NULL);
            //set session 
            session_start();
            $_SESSION['electronicsstore'] = $email;
            //return 1 (sucessful)
            die("1");
        }else{
          //unknown error
          die("10");
        }
    }else{
       //post not set
        die("3");
    }
}
  



  ?>
