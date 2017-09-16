<?php
if(isset($_POST['product_id'])){
    $product_id =$_POST['product_id'];
    $exist = false;
    session_start();
    if(isset($_SESSION['electrocart']) ) {
      $count = count($_SESSION['electrocart'])-1;
      while($count >= 0){
      if($_SESSION['electrocart'][$count]['product_id'] == $product_id ){
          $_SESSION['electrocart'][$count]['quantity'] += 1;
          $exist= true;
          break;
        }
        $count--;
      }
      if($exist == false){
        $count = count($_SESSION['electrocart']);
        $_SESSION['electrocart'][$count]['product_id'] = $product_id;
        $_SESSION['electrocart'][$count]['quantity'] = 1;

      }

      $cart_q = 0;
      $q = count($_SESSION['electrocart']);
      $i = 0;
      while($i < $q){
        $cart_q += $_SESSION['electrocart'][$i]['quantity'];
        $i++;
      }
      $_SESSION["cart_q"] = $cart_q;
      echo $cart_q;

    }else{

      $_SESSION['electrocart'] =array();
      $_SESSION['electrocart'][0]['product_id'] = $product_id;
      $_SESSION['electrocart'][0]['quantity'] = 1;
      $_SESSION['electrocart'][0]['quantity'] = 1;
      $cart_q = 0;
      $q = count($_SESSION['electrocart']);
      $i = 0;
      while($i < $q){
        $cart_q += $_SESSION['electrocart'][$i]['quantity'];
        $i++;
      }
      $_SESSION["cart_q"] = $cart_q;
      echo $cart_q;


    }
}








?>
