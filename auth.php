<?php
    
    //Controllo che l'utente sia già autenticato              

    require_once 'dbconfig.php'; //richiamiamo dbconfig.php dove definiamo host,name db,user e password
    session_start();

    function checkAuth() {
        // Se esiste già una sessione, la ritorno, si torna 0, servirà nei vari files php
        if(isset($_SESSION['username_id'])) {
            return $_SESSION['username_id'];
        } else 
            return 0;
    }
?>