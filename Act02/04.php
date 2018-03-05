<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicios 04</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Andres Garcia">
    <meta name="description" content="Desarrollo de Ejercicios PHP 01">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

    <style>
        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
    </style>

</head>

<body>

    <?php

    
    $result = 0;
    $pot = 1;
    $numBase = 1;
    $titleNum = false;
    $titleNull = true;
    
    //Actividad 01
    /*4. mostrar una tabla de 4 por 4 que muestre las primeras 4 potencias de 
    los números del uno 1 al 4 (hacer una función que las calcule invocando 
    la función pow). En PHP las funciones hay que definirlas antes de invocarlas. 
    Los parámetros se indican con su nombre ($cantidad) si son por valor y 
    antecedidos de & (&$cantidad) si son por referencia.
    */

    echo '<div class="container">
            <div class="row">
                <div class="col-lg-12">';
            
            include '../Act02/header.php';
            echo'<h1>Ejercicio 04</h1>';

            echo '
            <table class="table table-responsive">';

            //Ciclo por potencia -> 1-4
            do {
                //Si inicia imprimir fila 'Titulo con los numeros potencias'
                if ($titleNull) {
                    echo '<thead class="thead-light">
                            <tr>
                                <th></th>';
                
                    for ($numPot = 1; $numPot <= 4; $numPot++) {
                        echo '<th class="text-center" scope="col">' . $numPot . '</th>';
                    }
                
                    $titleNull = false;
                    echo '
                            </tr>
                        </thead>
                        <tbody>';
                }
                // Si siguiente fila, imprimir los resultados por numeros con potencias
                else {
                    echo '<tr>';
                    echo '<th class="text-center" scope="row">' . $numBase . '</th>';
                
                    for ($numPot = 1; $numPot <= 4; $numPot++) {
                        echo '<td>' . pow($numBase, $numPot) . '</td>';
                    }
                    $numBase++;
                }
                echo '</tr>';
            
            } while ($numBase <= 4);
        
            echo '
                    </tbody>
                </table>
            </div>
        </div>
    </div>';
?>

     <!-- Script Bootstrap  -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
         crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
         crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
         crossorigin="anonymous"></script>
</body>

</html>