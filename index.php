
<!-- INCLUDES DE DATOS -->
<?php
require_once('models/Perro.php');
require_once('models/Gato.php');


$animales=[

    $bobby ,
    $camilo,
    $fluffy,
    $jack,
    $joker,
    $ruffy,
    $miaumiau

];

?>
<!-- ***************************** -->

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <title>Adopta Tu Mascota</title>

</head>

<body>

<header>

<h1>Adopta a tu nuevo perro</h1>

<h2>Ellos tambien tienen derecho a ser felices:</h2>

</header>


<?php

foreach($animales as $valor){

    echo('<section class="contenedor">');

    echo('<article class="fotoAnimal">');

         $valor-> imprimirFoto();
    
    echo('</article>');

    echo('<article class="infoAnimales">');

        $valor-> imprimirDatos();

        echo('<a href="">LO ADOPTO!</a>');

    echo('</article>');





}

?>
</section>
</body>
</html>