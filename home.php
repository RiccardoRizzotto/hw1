<?php
require_once 'auth.php';
if (!$userid = checkAuth()) {
    header("Location: login.php");
    exit;
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="hw1.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lora">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <link href = "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="hw1.js" defer="true"></script>
    <title>Homework1</title>
</head>

<body>

    <header id = "header">
      <div id = "overlay"></div>
        <nav id = "navbar">
            <a class = "elemnav" href="home.php"> Home</a>
            <a class = "elemnav" href="visualizza_gallery.php"> Gallery</a>
            <a class = "elemnav" href="logout.php"> Logout</a>
            <a class = "elemnav" href="curl.php"> Meteo </a>
         </nav>
         
          <nav id = "menu">
        <div></div> <div></div> <div></div> 
          </nav>

       <h1 class = "titolo"> Esplora le Dolomiti </h1>
    </header>
       

    <section id = "section">
    
      <div id = "flex-container">
           <div class = "number"> 1.</div>
          <div class="flex-item">
            <h1 class = "titolo2 "> Cortina d'Ampezzo</h1>
             <p class = "commento"> La regina delle Dolomiti </p>
            <img src="images\Cortina-dAmpezzo_www.bandion.it-10.jpg" class = "immagine">
             <a class = "bottone" href = "cortina.php">Scopri di più</a>
          </div>
        </div>

      <div id = "flex-container">
          <div class = "number"> 2.</div>
           <div class="flex-item">
             <h1 class = "titolo2"> Corvara </h1>
                <p class = "commento"> Nel cuore dell'Alta Badia </p>
               <img src="images\alta-badia-vista-corvara.jpg" class = "immagine">
                <a class = "bottone" href = "corvara.php"> Scopri di più </a>
           </div>
      </div>
            

      <div id = "flex-container">
        <div class = "number"> 3.</div>
           <div class="flex-item">
             <h1 class = "titolo2"> Moena </h1>
               <p class = "commento"> Il gioiello della Val Di Fassa </p>
              <img src="images\Moena-paese.jpg" class = "immagine">
               <a class = "bottone" href = "moena.php"> Scopri di più </a>
          </div>
      </div>

      <div class = "video-cointainer">
        <iframe class="video" src="https://www.youtube.com/embed/trBN1A8lj2E" title="DOLOMITES 4K Time-lapse" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
      </div>

    </section>
   
<footer class = "footerp"> 
   <div class = "social-menu">
     <ul>
        <li><a href="#"><i class = "fa fa-facebook"></i></a></li>
        <li><a href="#"><i class = "fa fa-twitter"></i></a></li>
        <li><a href="#"><i class = "fa fa-instagram"></i></a></li>
        <li><a href="#"><i class = "fa fa-linkedin"></i></a></li>
     </ul>
   </div>

   <p class = "info_footer"> Esplora le Dolomiti </p>
    <p class = "info_footer"> dolomiti@gmail.com </p>
     <p class = "info_footer2"> Copyright © 2023. All rights reserved</p>
       
</footer>

 </body>
</html> 

 

 
  