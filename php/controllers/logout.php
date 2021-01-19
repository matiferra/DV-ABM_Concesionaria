<?php 
    session_start();
    session_destroy();

    header('location: /web+ABM/home.php');

?>