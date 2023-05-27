<?php
// File php che mi ritorna le immagini nel database, mi crea il json che poi visualizzo in visualizza_gallery.php
include 'dbconfig.php';

$conn = mysqli_connect($dbconfig['host'], $dbconfig['user'], $dbconfig['password'], $dbconfig['name']) or die(mysqli_error($conn));

$data = array();  //creo un array che mi serve per il json
$sql = "SELECT * FROM dolomites_images";
$result = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($result)) 
  {
     $data[] = $row;
  }

mysqli_free_result($result);
mysqli_close($conn);

echo json_encode($data);
?>
