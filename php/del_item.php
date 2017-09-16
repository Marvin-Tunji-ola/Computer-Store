<?php
if(isset($_POST['product_id'])){
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];
    session_start();

    if(isset($_SESSION['electrocart']) ) {
      $count = count($_SESSION['electrocart']);
      $temp = array();
      $i = 0;
      $j=0;
      while($i < $count){
        if($j < $count){
        if($_SESSION['electrocart'][$j]['product_id'] == $product_id ){
          unset($_SESSION['electrocart'][$j]);
          $_SESSION['cart_q'] -= $quantity;
          $j++;
          continue;
        }
        $temp[$i] = $_SESSION['electrocart'][$j];
      }
        $i++;
        $j++;
      }
      unset($_SESSION['electrocart']);
      $_SESSION['electrocart'] = $temp;
      echo($_SESSION['cart_q']);
    }
  }else{
    die("0");
  }
?>
