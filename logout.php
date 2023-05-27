<?php
 //LOGOUT
 include 'dbconfig.php';

    // Distruggo la sessione
    session_start();
    session_destroy();

    header('Location: login.php');
?>