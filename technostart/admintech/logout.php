<?php
    session_start();
    if(isset($_SESSION['technostart']) && isset($_SESSION['role'])){
        session_unset($_SESSION['technostart']);
        session_unset($_SESSION['role']);
        session_destroy();
        header('Location:../index.php');
    }
?>
