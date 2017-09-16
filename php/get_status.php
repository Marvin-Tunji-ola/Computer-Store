<?php
  session_start();
  if(isset($_SESSION['electronicsstore'])){
    die('1');
  }else{
    die('0');
  }

?>
