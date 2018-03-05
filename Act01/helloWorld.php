<html>

<head>

<title>Actividad 01</title>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>

<body>
    <?php 
$dia = date("d");
$fecha = date("d/m/y");

$dia1 = 24; //Se declara una variable de tipo Integer
$sueldo = 758.48 ;//Se declara una variable de tipo Double
$nombre = "Juan"; //Se declara una variable de tipo String
$exite = true; //Se declara una variable de tipo Boolean


echo 'Hello World </br> Hi my name is Andres </br> I am learning </br>';

for ($i=0; $i < 10 ; $i++) { 
 echo '</br> Hello World, Writing line ', $i;
}

if ($dia <= 10) {
 echo '</br> </br>  Sitio activo';
}else {
 echo '</br> </br> Sitio inactivo, Hoy dia es ', $dia;
}

echo '</br>';
echo '</br>';
echo 'Variable entera: ';
echo $dia1;
echo '</br>';
echo  'Variable float: ';
echo $sueldo;
echo '</br>';
echo 'Variable String: ';
echo $nombre; 
echo '</br>';
echo 'Variable Boolean: '; 
echo $exite; 
echo '</br>';
echo '</br>';


$cadena1 = "Hello";
$cadena2 = "World";

echo $cadena1 . " " . $cadena2;

echo '</br>';
$dia = date("d");
$fecha = 'Hoy es ' . $dia;
echo $fecha;

echo '</br>';
$indicesServer = array('PHP_SELF', 'argv', 'argc', 'GATEWAY_INTERFACE', 'SERVER_ADDR', 'SERVER_NAME', 'SERVER_SOFTWARE',
'SERVER_PROTOCOL', 'REQUEST_METHOD', 'REQUEST_TIME', 'REQUEST_TIME_FLOAT', 'QUERY_STRING', 'DOCUMENT_ROOT', 'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET', 'HTTP_ACCEPT_ENCODING', 'HTTP_ACCEPT_LANGUAGE', 'HTTP_CONNECTION', 'HTTP_HOST', 'HTTP_REFERER', 'HTTP_USER_AGENT',
'HTTPS', 'REMOTE_ADDR', 'REMOTE_HOST', 'REMOTE_PORT', 'REMOTE_USER', 'REDIRECT_REMOTE_USER', 'SCRIPT_FILENAME', 'SERVER_ADMIN',
'SERVER_PORT', 'SERVER_SIGNATURE', 'PATH_TRANSLATED', 'SCRIPT_NAME', 'REQUEST_URI', 'PHP_AUTH_DIGEST', 'PHP_AUTH_USER', 'PHP_AUTH_PW',
'AUTH_TYPE', 'PATH_INFO', 'ORIG_PATH_INFO') ; 
echo '<table cellpadding="10">' ; 

foreach ($indicesServer as $arg) { 
    if (isset($_SERVER[$arg])) { 
    echo '<tr>
            <td>'.$arg.'</td>
            <td>' . $_SERVER[$arg] . '</td>
        </tr>' ; 
    } else { 
    echo '<tr>
            <td>'.$arg.'</td>
            <td>-</td>
          </tr>';
    }
} 
echo '</table>' ;

echo'
<br>
<br>';

echo phpinfo();

echo '</br> </br> </br>';

$result = 0;
$mult = 1;
$num = 1;
$titleNum = false;

//Ciclo por Multiplicando -> 0-10
echo '<table>';
do {
    echo '<tr>';
    echo '<td>'. $num .'</td>';  

      //Sub Ciclo por Multiplicador -> 1-10
      while ($mult <= 10) {

          if ($mult >= 1) {     

            if ($titleNum) {
                $result = $num *  $mult;
                echo '<td>'. $result .'</td>';  
            }
            else {
                echo '<td>'. $mult .'</td>';  
                $titleNum = true;
            }

          }

          $mult = $mult + 1;
      }

      echo '</tr>';
      $mult = 1;        //Resetea variable multiplicador
      $num ++;  //Incrementando Multiplicando
      
    } while ($num <= 10);

echo '</table>';


$result = 0;
$pot = 1;
$numBase = 1;
$titleNum = false;
$titleNull = true;
echo '</br>
</br>
<table>';
//Ciclo por potencia -> 1-4
do {    
    //Si inicia imprimir fila 'Titulo con los numeros potencias'
    if ($titleNull) {
        echo '<tr><td></td>';  

        for ($numPot=1; $numPot <= 4 ; $numPot++) {
            echo '<td>'. $numPot .'</td>';  
        }

        $titleNull = false;
    }
    // Si siguiente fila, imprimir los resultados por numeros con potencias
    else {
        echo '<tr>';
        echo '<td>'.$numBase .'</td>';  

        for ($numPot=1; $numPot <=4; $numPot++) { 
            echo '<td>' . pow($numBase, $numPot) . '</td>';
        }
        $numBase++;
    }       
    echo '</tr>';

      
    } while ($numBase <= 4);

echo '</table>';

echo '</br>';

$pics = importPics();
$j = 0;

echo '<table>';

for ($row=0; $row < 4 ; $row++) { 
    echo '<tr>';

    for ($col=0; $col < 4; $col++) { 
        echo '<td>' . '<img src="'. $pics[$j] .'" alt="This Picture" width=200px height=200px>' . '</td>';
        $j++;
    }

    echo '</tr>';

}
echo '</table>';



function importPics()
{
    $i = 0;
    $dir = "../Act02/imgs/";

    // Abre un directorio conocido, y procede a leer el contenido
    if (is_dir($dir))
    {
        if ($dh = opendir($dir))
        {
            while (($file = readdir($dh)) !== false) 
            {
                if ($file != "." && $file != "..")
                {
                    $pics[$i] =  $dir . $file;
                    $i++;
                }
            }
        }
         
        closedir($dh);
    }
    return $pics;
}



?>


</body>

</html>