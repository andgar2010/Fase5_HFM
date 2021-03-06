<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 03</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Andres Garcia">
    <meta name="date" content="2018-03-05" scheme="YYYY-MM-DD">
    <meta name="description" content="Desarrollo de Ejercicios PHP 03">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.7/css/lightgallery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.7/css/lg-transitions.min.css">
</head>

<body>
<?php
//Actividad 03
/*3. Idéntico al anterior, pero que si no existe la miniatura de una foto debe de crearla.
Para generar la miniatura se usa el programa convert (hay que invocarlo en línea de
comandos desde PHP son la función)*/

require 'Imaging.php';

function importPics($dir)
{
    $i = 0;

    // Abre un directorio conocido, y procede a leer el contenido
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file != "." && $file != "..") {
                    $pics[$i] = $dir . $file;
                    $i++;
                }
            }
        }
        closedir($dh);
    }
    return $pics;
}

function resizeImgUrl($dir)
{
    $i = 0;

    // Abre un directorio conocido, y procede a leer el contenido
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                if ($file != "." && $file != "..") {
                    $picUrl = $dir . $file;
                    $thumb = new thumbnail($picUrl, 100, 100);
                    $pics[$i] = '<img src=\'' . $thumb . '\' alt=\'myimage\' title=\'myimage\'/>';
                    $i++;
                }
            }
        }

        closedir($dh);
    }
    return $pics;
}

$dirFull = "imgs/";
$picsFull = importPics($dirFull);
$picsMini = resizeImgUrl($dirFull);
$j = 0;
$k = 0;

echo '<div class="container">
         <div class="row">
            <div class="col-lg-12">';
        include '../Act04/header.php';
            echo '<h1 class="text-center">Ejercicio 02</h1>
                    <div> 
                        <table class="table table-responsive">';
                        for ($row = 0; $row < 4; $row++) {
                            echo '<tr>';
                            for ($col = 0; $col < 4; $col++) {
                                echo '<td align="center">' .
                                        '<a class="selector2" href="' . $picsFull[$j] . '"> '
                                            . $picsMini[$k] .
                                        '</a>'
                                    .'</td>';
                                    $j++;
                                    $k++;
                            }
                            echo '</tr>';
                        }
                        echo '</table>
                    </div>
                </div>
            </div>
        </div>';
?>

<!-- Script Bootstrap  -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

<!-- // LightGallety -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.6.7/js/lightgallery.min.js"></script>

<!-- A jQuery plugin that adds cross-browser mouse wheel support. (Optional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lg-thumbnail/1.1.0/lg-thumbnail.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lg-fullscreen/1.0.1/lg-fullscreen.min.js"></script>
<script src="https://sachinchoolur.github.io/lightGallery/lightgallery/js/lg-zoom.js"></script>

<script type="text/javascript">
    $('.selector2').lightGallery({
        selector: 'this'
    });
</script>
</body>