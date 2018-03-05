<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicio 02</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Andres Garcia">
    <meta name="description" content="Desarrollo de Ejercicios PHP 01">
    <style>
        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        /* tr:nth-child(even) {
        background-color: #dddddd;
    } */
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>

<body>
    <?php   
        define('TAM', '10', true);
        
        $result = 0;
        $mult = 1;
        $num = 1;
        $titleNum = false;

        //Actividad 01
        /*2. Mostrar en pantalla una tabla de 10 por 10 con los números del
        1 al 100.*/

        echo '<div class="container">
                <div class="row">
                    <div class="col-lg-12">';

            include '../Act02/header.php';

                echo '<h1>Ejercicio 03</h1>
                      <div class="row">';

        //Ciclo por Multiplicando -> 0-10
        echo '
        <table class="table table-striped table-responsive">';
            do {
                echo '<tr>';
                echo '<td>' . $num . '</td>';
            
                //Sub Ciclo por Multiplicador -> 1-10
                while ($mult <= TAM) {
                
                    if ($mult >= 1) {
                    
                        if ($titleNum) {
                            $result = $num * $mult;
                            echo '<td>' . $result . '</td>';
                        } else {
                            echo '<td>' . $mult . '</td>';
                            $titleNum = true;
                        }
                    
                    }
                
                    $mult = $mult + 1;
                }
            
                echo '</tr>';
                $mult = 1; //Resetea variable multiplicador
                $num++; //Incrementando Multiplicando
            
            } while ($num <= 10);
        echo '</table>
        </div>
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