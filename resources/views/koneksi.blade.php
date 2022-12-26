<?php
    
    $name = "localhost";
    $username = "root";
    $password = "12345";
    $db_name = "db_os";
    
    $connection = mysqli_connect('localhost','root','12345','db_os');

    if(!$connection) {
        echo "Connection Failed!";
    }
?>