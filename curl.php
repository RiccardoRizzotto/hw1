<?php

$key_weather = '7722b8b48b1e4923824170135231804';
$url = "http://api.weatherapi.com/v1/current.json";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer " . $key_weather
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$response = curl_exec($ch);
curl_close($ch);


/* // Create a new cURL resource
$ch = curl_init();

// Set the request URL
curl_setopt($ch, CURLOPT_URL, $url);

// Set the request headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $key_weather,
    'Content-Type: application/json'
]);

// Set the request method to GET
curl_setopt($ch, CURLOPT_HTTPGET, true);

// Include the response headers in the output
curl_setopt($ch, CURLOPT_HEADER, true);

// Return the response instead of outputting it directly
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($ch);

// Close cURL resource
curl_close($ch);

// Output the response
echo $response; */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Meteo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class= "container">
     <button type = "submit" class = "btn" onclick="openPopup()"> Meteo </button>
       <div class = "popup" id="popup">


        <form name ='search_content' id='search_content'>
			
          <h1 id="titolo">Meteo</h1>
          
          <label>Luogo: <input type='text' placeholder="Enter the city" name = 'content' id ='content'></label>	
          <label>&nbsp;<input class="submit" type='submit'></label>
         </form>
          
      <article id="album-view">
    
          <div class="card">
            <p class="humidity"></p>
            <p class="temp"></p>
            <p class="desc"></p>
            <p class="wind"></p>
            <p class="prec"></p>
            <p class="company"></p>
            <p id="dove"></p>
          </div>
    
      </article>

          <h2> Powered by WeatherApi</h2>
          <button type="button" onclick="closePopup()"> OK</button>
  
       </div>
   </div>

<script src="app.js"></script>
</body>
</html>