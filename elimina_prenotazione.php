<?php
      // Al click di elimina, viene fatta una DELETE dal tatabse e mi toglie quella prenotazione
    
     include 'dbconfig.php';
if(isset($_GET["id_prenotazione"])) // faccio get perch, nella fetch su js ho passato il parametro come get
 {
  
    $conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));
    
    $id_prenotazione = mysqli_real_escape_string($conn, $_GET["id_prenotazione"]);
    mysqli_query($conn, "DELETE from tb_data WHERE id = '".$id_prenotazione."'");

    mysqli_close($conn);
    echo json_encode(["state"=>true]); //mi faccio tornare lo stato, potrebbe essere comoda come cosa
 } 
?>