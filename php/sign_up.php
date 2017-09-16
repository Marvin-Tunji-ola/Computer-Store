<?php
  include("DBConnect.php");
  if($DB_CONNECT -> connect_error){
        $message="Connection failed: ". $DB_CONNECT->connect_error;
       die($message);
  }else{
    //if POST is sent
    if(isset($_POST)){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $confirm_password = $_POST["confirm_password"];
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE email ='$email'";
            include('DB_GET.php');
            if ($data == null){
                    if($password==$confirm_password){
                        $sql = "INSERT INTO users(email, password, name) VALUES('$email', '$password', '$name')";
                        include("DB_Put.php");
                        if($message == "sucessful"){
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
                            //unsucessful
                            die("0");
                        }
                    }else{
                        //password mismatch
                        die("2");
                    }
            }else{
                die("4");
            }


    }else{
        //post not set
        die("3");
    }
  }
?>
