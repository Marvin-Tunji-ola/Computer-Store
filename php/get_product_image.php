<?php
include("DBConnect.php");
if($DB_CONNECT -> connect_error){
    $message="Connection failed: ". $DB_CONNECT->connect_error;
    die($message);
}else{

    if(isset($_GET['id']) && isset($_GET['index'])){
        $product_id = $_GET['id'];
        $image_index = $_GET['index'];
        if($image_index == 1){
            $sql = "SELECT image_1 FROM products WHERE product_id = '$product_id'";
            include('DB_Get.php');
            header("Content-type: image/jpeg");
            echo $data['image_1'];
        }elseif($image_index == 2) {
            $sql = "SELECT image_2 FROM products WHERE product_id = '$product_id'";
            include('DB_Get.php');
            header("Content-type: image/jpeg");
            echo $data['image_2'];     
        }elseif($image_index == 3){
            $sql = "SELECT image_3 FROM products WHERE product_id = '$product_id'";
            include('DB_Get.php');
            header("Content-type: image/jpeg");
            echo $data['image_3'];
        }     

    }
  
  
}

 ?>
