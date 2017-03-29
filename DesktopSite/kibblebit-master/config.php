<?php
    $host = "127.0.0.1";
    $user = "root";                  
    $pass = "";
    $database = "database";
    $port = 3306;
    $db = mysqli_connect($host, $user, $pass, $database, $port)or die(mysql_error());
?>
