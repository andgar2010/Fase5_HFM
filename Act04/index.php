<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actividad 01 Andrés García</title>
    <meta name="author" content="Andres Garcia">
    <meta name="description" content="Desarrollo de Actividad 01 PHP">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.1.1/css/hover-min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
</head>

<body>
<?php
    $msg = array(	
				'Identico al ultimo ejercicio, pero que muestre las fotos en 100x100 y que al pulsar 
				abra la foto entera. Compruebe que sólo muestra fotos con extensión .jpg, .png, bmp o .gif',				
				'Idéntico al anterior, pero que por cada foto tenga una miniatura. Para la foto playa.jpg la
				miniatura será MINI-playa.jpg',
				'Idéntico al anterior, pero que si no existe la miniatura de una foto debe de crearla. Para generar
				la miniatura se usa el programa convert (hay que invocarlo en línea de comandos desde PHP
				son la función');

    echo '<div class="container">';
        echo'<div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Desarrollo de actividad 04 PHP</h1>
                    <h3 class="text-center">Realizado por Andrés García</h3>                
                </div>                    
             </div>
             <hr>';
        for ($i=1; $i <= 3 ; $i++)
        {
            $j = $i;
            $j--;
            echo '<div class="row">
                    <div class="col-lg-9">
                        <p> '.$i.'. '.$msg[$j].' </p>
                    </div>
                    <div class="col-lg-2">
                        <a class="btn btn-outline-primary hvr-icon-forward" href="../Act04/0'.$i.'.php">Solución #0'.$i.'</a>    
                    </div>                    
                 </div>
                <hr>';
        }
    echo '</div>';
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>