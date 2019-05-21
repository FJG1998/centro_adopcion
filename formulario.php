
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/formulario.css">

    <title>Formulario de adopción</title>

</head>
<body>

    


    <div class="contenedor">

        <form action="" method="GET">

        <?php
                    echo('<h3>Rellena este formulario si quieres quedarte con:' . ' ' . $_GET['nombre'] .'</h3><br>');

                    echo('<img src="img/'. $_GET['nombre'].'jpg"><br><br>');
        ?>


            <span>Nombre:</span>
            <input type="text" name="nombre" id="" required autofocus><br><br>

            <span>Apellidos:</span>
            <input type="text" name="apellidos" id="" required><br><br>

            <span>Correo electrónico:</span>
            <input type="email" name="email" id="" required><br><br>


            <span>Dirección:</span>
            <input type="text" name="calle" id="" required><br><br>
        
            <span>Sube aqui un foto de tu DNI:</span>
            <input type="file" name="dni" accept="image/x-png,image/gif,image/jpeg" required/><br><br>
            
            <span>Movil:</span>
            <input type="text" name="tel" id="" required><br><br>
            <span>Tienes hijos?</span>
            <input type="checkbox" name="hijos" id=""><br><br>
            <span>Tienes algun tipo de denuncia por maltrato animal?</span>
            <input type="checkbox" name="delincuente" id=""><br><br>
            <input type="submit" value="Quiero este perro!">
            
            
        </form>
    </div>
    
</body>
</html>