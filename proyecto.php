<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

$ch = curl_init(API_URL); # inicializar nueva sesion de curl

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); # indicamos que queremos recibir el resultado de la peticion y no mostrarla en lapantalla

$result = curl_exec($ch); # ejecutar la peticion y obtener el resultado

// alternativa seria utilizar file_get_contents y si solo quieres hacer un get
//$resultado = file_get_contents(API_URL);


$data = json_decode($result, true);  # decodificar el JSON en un array asociativo   
curl_close($ch);   # cerrar la conexión a curl
//var_dump($data);

?>

<head>
<meta charset="UTF-8" />
<title>La proxima pelicula de Marvel</title>
<meta name="description" content="La proxima pelicula de Marvel"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
/>

</head>

<main>

  <!--<pre style="font-size:10px; overflow: scroll; height:250px;">
    <?php var_dump($data)?>
  </pre> -->
  <h2>La proxima pelicula de Marvel</h2>
  <section>
    <img src="<?= $data["poster_url"]; ?>" width="300" alt="poster de <?= $data["title"]; ?>" style="border-radius:16px"/>
  </section>


  <hgroup>
    
  
    <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"];  ?> dias</h3>
    <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
    <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>


</main>

<style>
  :root{
    color-scheme: light dark;
  }
body{
  display: grid;
  place-content: center;
}


section{
  display: flex;
  justify-content: center;
  text-align: center;
}

hgroup{
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
}



</style>