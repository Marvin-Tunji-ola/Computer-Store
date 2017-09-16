<?php
session_start();
if(isset($_SESSION['electronicsstore'])){
  session_unset();
  session_destroy();

}

if(isset($_COOKIE['electronicsstore'])){
  $cookie_name = 'electronicsstore';
  $cookie_value = "";
  setcookie($cookie_name, $cookie_value , time()-3600, '/');


}
header("location:../index.php");

 ?>
