const name = document.querySelector('.name');
const surname = document.querySelector('.surname');
const email = document.querySelector('.email');
const phone = document.querySelector('.phone');
const data_nascita = document.querySelector('.data_nascita');
const hotel = document.querySelector('.hotel');

function onResponse(response)
{
   return response.json();
}

function onJson(json) //parsing del mio json
{
    console.log(json);
    const library = document.querySelector('#album-view');
     library.innerHTML = ''
  
   
       for(let j of json)
        {
        
            const name = document.createElement('p');
            name.textContent = "Name: " + j.name
            library.appendChild(name);
          
            const surname = document.createElement('p');
            surname.textContent = "Surname: " + j.surname
            library.appendChild(surname);
  
            const email = document.createElement('p');
            email.textContent = "Email: " + j.email
            library.appendChild(email);
  
            const data_nascita = document.createElement('p');
            data_nascita.textContent = "Data di Nascita: " + j.data_nascita
            library.appendChild(data_nascita);
  
            const phone = document.createElement('p');
            phone.textContent = "Phone: " + j.telefono
            library.appendChild(phone);

            const residenza = document.createElement('p');
            residenza.textContent = "Residenza: " + j.residenza
            library.appendChild(residenza);

            const check_in = document.createElement('p');
            check_in.textContent = "Check-In: " + j.check_in
            library.appendChild(check_in);

            const check_out = document.createElement('p');
            check_out.textContent = "Check-Out: " + j.check_out
            library.appendChild(check_out);

            const hotel = document.createElement('p');
            hotel.textContent = "Hotel: " + j.hotel
            library.appendChild(hotel);

            const elimina = document.createElement('a');
            elimina.href = '#';
            elimina.dataset.id_prenotazione = j.id;
            elimina.textContent = "Elimina";
            elimina.addEventListener("click",eliminaPrenotazione);
            library.appendChild(elimina); 
         }
}

fetch("profilo.php").then(onResponse).then(onJson); //fetch globale


function aggiornaPrenotazioni(response)
{
    return response.json();
}


function onDeleteJson(json){
    console.log(json.state);
}


function eliminaPrenotazione(event)
{
    const id_prenotazione = event.currentTarget.dataset.id_prenotazione;
    console.log(typeof id_prenotazione);
    fetch("elimina_prenotazione.php?id_prenotazione=" + id_prenotazione).then(aggiornaPrenotazioni).then(onDeleteJson);
    fetch("profilo.php").then(onResponse).then(onJson);
    aggiornaPrenotazioni();
    event.preventDefault(); //previene click sul link
}


























