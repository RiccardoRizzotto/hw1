<?php
  
   //FORM E INSERIMENTO DATI NEL DB PER LA PRENOTAZIONE DI UNA STRUTTURA 
  require_once 'auth.php';
  if(!$user_id = checkAuth())
    {
      echo "Errore";
      exit;
    }

  require_once 'connection.php';
  
  if(isset($_POST["submit"]))
   {
     $name = $_POST["name"];
     $email = $_POST["email"];
     $surname = $_POST["surname"];
     $date = $_POST["data_nascita"];
     $phone = $_POST["phone"];
     $residence = $_POST["residenza"];
     $check_in = $_POST["check_in"];
     $check_out = $_POST["check_out"];
     $hotel = $_POST["hotel"];

    $submit = mysqli_real_escape_string($conn,$_POST["submit"]);

     $query = "INSERT INTO tb_data VALUES('', '$name', '$surname', '$email', '$date', '$phone', '$residence', '$check_in', '$check_out', '$user_id', '$hotel')";
     mysqli_query($conn, $query);
     mysqli_close($conn);
   }
  
   /*Alternativamente associamo un event listener al form creando una funzione aggiungiEvento
     definendo un form_data con method: post e body: new FormData(form) e fare una fetch al fine php*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_prenotazione.css">
    <title> Prenota il tuo hotel </title>
</head>

<body>

 <h1 class = "titolo"> Prenota la tua vacanza in Altura </h1>
<form class = "" method = "post" action ="">

        <p>
            <label> Name <input type = 'text' name = 'name'> </label>
        </p>

        <p>
            <label> Surname <input type = 'text' name = 'surname'> </label>
        </p>

        <p>
            <label> Email <input type = 'text' name = 'email'> </label>
        </p>

        <p>
            <label> Date <input type = 'text' name = 'data_nascita'> </label>
        </p>

        <p>
            <label> Phone <input type = 'text' name = 'phone'> </label>
        </p>
    
        <p>
            <label> Residence <input type = 'text' name = 'residenza'> </label>
        </p>

        <p>
            <label> Check-In <input type = 'text' name = 'check_in'> </label>
        </p>

        <p>
            <label> Check-out <input type = 'text' name = 'check_out'> </label>
        </p>

        <p>
            <label> Hotel <input type = 'text' name = 'hotel'> </label>
        </p>


        <button type ="submit" name = "submit"> Invia la tua Prenotazione </button>
    </form>
</body>
</html>