<?php
    session_start();
    include('database.php');
    if(isset($_SESSION['full_name'])) {
        session_destroy();
        header("Location: login.php");
    }else{
        echo "Error desconocido";
    }
?> 
