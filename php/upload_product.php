<?php
  include("DBConnect.php");

  $file_1   =$_FILES['file_1']['tmp_name'];
  $file_2   =$_FILES['file_2']['tmp_name'];
  $file_3   =$_FILES['file_3']['tmp_name'];
  if($file_1== null || $file_2 == null || $file_3 == null){
    header('location:/admin/store_upload.php');
  }else{

    //image files
    $image_1 = addslashes(file_get_contents($file_1));  //SQL Injection defence!
    $image_2 = addslashes(file_get_contents($file_2));  //SQL Injection defence!
    $image_3 = addslashes(file_get_contents($file_3));  //SQL Injection defence!


    //form data
    if(isset($_POST)){
      $product_name = $_POST['product_name'];
      $product_description = $_POST['description'];
      $standard_price = $_POST['standard_price'];
      $selling_price = $_POST['selling_price'];
      $category = $_POST['category'];
      $quantity = $_POST['quantity'];

      $sql = "INSERT INTO products(`product_name` , `description` , `category`,`image_1` , `image_2` ,  `image_3` , `standard_price`, `selling_price`,`quantity`)
            VALUES('$product_name','$product_description','$category','{$image_1}' , '{$image_2}' , '{$image_3}', '$standard_price' , '$selling_price' , '$quantity')";
      include("DB_Put.php");
      echo $message;
    }else{

    }

  }



 ?>
