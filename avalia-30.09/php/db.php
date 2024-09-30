<?php 
        $host = 'localhost';
        $db = 'escola'; 
        $user = 'CarlosM66';
        $pass = 'carlos668_fnaf';
        $port = 3307;

    $conn = new mysqli($host, $user, $pass, $db,$port);

    if ($conn->connect_error){
        die("falha na conxão" . $conn->connect_error);
    }
// fim D:30/09 H:08:48
?>