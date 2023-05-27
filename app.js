let popup = document.getElementById("popup");

function openPopup() {
    popup.classList.add("open-popup");
}

function closePopup() {
  popup.classList.remove("open-popup");
}


//
const humidity = document.querySelector('.humidity');
const temp = document.querySelector('.temp');
const desc = document.querySelector('.desc');
const wind = document.querySelector('.wind');
const prec = document.querySelector('.prec');
const dove = document.querySelector('#dove');

//Keys and endpoints
const key_weather = '7722b8b48b1e4923824170135231804';			
const weather_api_endpoint = 'http://api.weatherapi.com/v1/current.json' 

function search(event)
{
  event.preventDefault();

  const content = document.querySelector('#content').value;

  const text = encodeURIComponent(content);

        weather_request = weather_api_endpoint + '?key=' + key_weather + '&q=' + text;
        fetch(weather_request).then(onResponse).then(onJson_weather);
  }

 
function onJson_weather(responseJSON)
{
   console.log(responseJSON);
   const library = document.querySelector('#album-view');
   library.innerHTML = ''

   const umidità = document.createElement('p');
   humidity.textContent = "Humidity: " + responseJSON.current.humidity;
   library.appendChild(humidity); 

   const temperatura = document.createElement('p');
   temp.textContent = "Temperature(#°): " + responseJSON.current.temp_c;
   library.appendChild(temp);

   const descrizione = document.createElement('p');
   desc.textContent = "Condition: " + responseJSON.current.condition.text;
   library.appendChild(desc);

   const vento = document.createElement('p');
   wind.textContent = "Wind(km/h): " + responseJSON.current.wind_kph;
   library.appendChild(wind);

   const prec = document.createElement('p');
   prec.textContent = "Rainfall(mm): " + responseJSON.current.precip_mm;
   library.appendChild(prec);
    
} 


function onResponse(response)
{
  return response.json();
}

fetch("http://localhost/curl.php").then(onResponse).then(onJson_weather);

//Aggiungo event listener al form1 per la RICERCA
const form = document.querySelector('#search_content');
form.addEventListener('submit',search);