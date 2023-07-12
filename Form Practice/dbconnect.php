<?php
    $server_name = "localhost";
    $user_name = "id20748819_qna";
    $password = "QNA-Data1";
    $db_name = "id20748819_quietninjasassociation";
    
    $conn = mysqli_connect($server_name, $user_name, $password, $db_name);
    
    if (!$conn) {
        echo "Connection Failed!";
    }
    
?>