<?php

if($DB_CONNECT->query($sql) == true){

  $message = "sucessful";

}else{

  $message = "Error: ".$DB_CONNECT->error;

}

?>
