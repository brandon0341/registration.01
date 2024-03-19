<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "webpage";
    $conn = new mysql ($servername, $username, $password, $db_name);

    if ($conn -> connect_error){
        die("Connection Failed" .$conn -> connect_error);
    }

    echo "Connected Successfully"

    

?>