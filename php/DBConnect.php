<?php
#Project Name: EduBot
#File Name: DBConnect.php

    $DB_HOST ='localhost';
    $DB_USER ='root';
    $DB_PASSWORD ='secret';
    $DB_DB = 'electronics_store_db';

    $DB_CONNECT = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DB);



?>