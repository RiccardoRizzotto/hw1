<?php
    
    // Faccio un check che la mail sia unica


    require_once 'dbconfig.php';
    
    // Controllo che si può accedere 
    if (!isset($_GET["q"])) {
        echo "C'è un problema";
        exit;
    }

   // header della risposta
    header('Content-Type: application/json');
    
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']);
    $email = mysqli_real_escape_string($conn, $_GET["q"]);
    $query = "SELECT email FROM utenti WHERE email = '$email'";

    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));

    // Viene tornato un JSON con chiave exists e valore boolean
    echo json_encode(array('exists' => mysqli_num_rows($res) > 0 ? true : false)); //relazione ternaria
    mysqli_close($conn);
?>