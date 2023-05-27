<?php
// File php che mi ritorna le prenotazioni fatte nel database 
include 'dbconfig.php';
include 'auth.php';


$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

$id_utente_loggato = mysqli_real_escape_string($conn,$_SESSION['username_id']);
$data = array();
$sql = "SELECT * FROM tb_data WHERE id_utente_prenotazione = '".$id_utente_loggato."'";
$result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)) 
  {
     $data[] = $row;
  }

mysqli_free_result($result);
mysqli_close($conn);

echo json_encode($data);
?>
