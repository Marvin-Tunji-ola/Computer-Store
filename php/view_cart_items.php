<?php
include('DBConnect.php');
session_start();

if(isset($_SESSION['electrocart'])){
    $items = array();
    $count = count($_SESSION['electrocart'])-1;
    $i = 0;
    while($i <= $count){
      $product_id = $_SESSION['electrocart'][$i]['product_id'];
      $quantity = $_SESSION['electrocart'][$i]['quantity'];
        $sql = "SELECT  product_name , selling_price  FROM products WHERE product_id = '$product_id'";
        include('DB_GET.php');
        if($data != null){
              $items[$i]['product_id'] = $product_id;
              $items[$i]['product_name'] = $data['product_name'];
              $items[$i]['quantity'] = $quantity;
              $items[$i]['price'] = $data['selling_price'];
              $items[$i]['total'] = $quantity * $data['selling_price'];
              $i++;

        }


      }

      die(json_encode($items));
  }else{

  die('0');
}


 ?>
