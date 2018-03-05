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
    $msg = array('Hacer un programa que muestre en pantalla información de PHP con la función phpinfo().
                    Muestre la información centrada horizontalmente en la pantalla.', 
                'Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100.',
                'Idéntico al ejercicio anterior, pero colorear las filas alternando gris y blanco. Además, 
                    el tamaño será una constante: define(TAM, 10)',
                'Mostrar una tabla de 4 por 4 que muestre las primeras 4 potencias de los números del uno 1 al 4 
                    (hacer una función que las calcule invocando la función pow). En PHP las funciones hay que
                    definirlas antes de invocarlas. Los parámetros se indican con su nombre ($cantidad) si son por valor y 
                    antecedidos de & (&$cantidad) si son por referencia.',
                'Hacer un programa que muestre en una tabla de 4 columnas todas las imágenes del directorio "fotos". 
                    En concreto la referencia de funciones de directorios). Suponga que en el directorio sólo existen fotos.');

    echo '<div class="container">';
        echo'<div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Desarrollo de actividad 02 PHP</h1>
                    <h3 class="text-center">Realizado por Andrés García</h3>                
                </div>                    
             </div>
             <hr>';
        for ($i=1; $i <= 5 ; $i++)
        {
            $j = $i;
            $j--;
            echo '<div class="row">
                    <div class="col-lg-9">
                        <p> '.$i.'. '.$msg[$j].' </p>
                    </div>
                    <div class="col-lg-2">
                        <a class="btn btn-outline-primary hvr-icon-forward" href="../Act02/0'.$i.'.php">Solución #0'.$i.'</a>    
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