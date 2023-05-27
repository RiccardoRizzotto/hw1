// Fetch per la gallery e parsing del json dove mi appendo le immagini nella pagina
function onResponse(response)
{
   return response.json();
}

function onJson(json)
{
    console.log(json);
    const library = document.querySelector('#album-view');
     library.innerHTML = ''
  
   
    for (let i = 0; i < json.length; i++)
    {

            const LibIMG = document.createElement('img');
            LibIMG.src = json[i].image_url;
            LibIMG.classList.add('image-collage');
            library.appendChild(LibIMG);
    }
}

fetch("gallery.php").then(onResponse).then(onJson); 
