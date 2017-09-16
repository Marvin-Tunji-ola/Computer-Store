<?php
include("DBConnect.php");
if($DB_CONNECT -> connect_error){
    $message="Connection failed: ". $DB_CONNECT->connect_error;
    die($message);

}else{
    session_start();
    if(isset($_POST['category'])){
        $category = $_POST['category'];
        if(isset($_SESSION[$category])){
            $offset = $_SESSION[$category];
            $_SESSION[$category] += 6;

        }else{
            $offset = 0;
            $_SESSION[$category] = 6;
        }

    }else{
        $offset= 0;
    }

    $sql = "SELECT * FROM products";
    $result = $DB_CONNECT->query($sql);
    $count = mysqli_num_rows($result);
    $remain = $count - $offset;

    if($remain%3 != 0 && $remain < 6){
        $toadd = 6-$remain%3;
        $offset -= $toadd;

    }


    $sql = "SELECT product_id , product_name , description , category , standard_price , selling_price , quantity
            FROM products WHERE category = '$category'  ORDER BY product_id LIMIT $offset, 6";
    $result = $DB_CONNECT->query($sql);
    if($result != null){
        $products = array();
        $i=0;
        while($row = mysqli_fetch_row($result)){
            $products[$i]['product_id'] = $row[0];
            $products[$i]['product_name'] = $row[1];
            $products[$i]['description'] = $row[2];
            $products[$i]['category'] = $row[3];
            $products[$i]['standard_price'] = $row[4];
            $products[$i]['selling_price'] = $row[5];
            $products[$i]['quantity'] = $row[6];
            $i++;

        }


    }

    die (json_encode($products));

}

 ?>
