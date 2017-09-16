<?php
  $result = $DB_CONNECT->query($sql);
  if($result->num_rows > 0){
   $data = mysqli_fetch_assoc($result);
  }else {
   $data = null;
  }

  ?>
