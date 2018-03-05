<?php
if (isset($_POST["SUBMIT"]) && $_SERVER["REQUEST_METHOD"] == "POST")
{
    //El nombre y contraseña son campos obligatorios
    if (empty($_POST["nombre"]))
    {
        $errores[] = "El nombre es requerido";
    }

    if (empty($_POST["password"]) || strlen($_POST["password"]) < 5)
    {
        $errores[] = "La contraseña es requerida y ha se ser mayor a 5 caracteres";
    }

    //El email es obligatorio y ha de tener formato adecuado
    if (!filter_var($_POST["email"], filter_validate_email) ||
        empty($_POST["email"]))
    {
        $errores[] = "No se ha indicado email o el formato no es correcto";
    }

    //El sitio web es obligatorio y ha de tener formato adecuado
    if (!filter_var($_POST["sitioweb"], filter_validate_url) ||
        empty($_POST["sitioweb"]))
    {
        $errores[] = "No se ha indicado sitio web o el formato no es correcto";
    }

    //Si array $errores está vacio, se aceptan los datos y asignan a variables 
    if (empty($errores))
    {
        $nombre = filtrado($_POST["nombre"]);
        $password = filtrado($_POST["password"]);
        $educacion = filtrado($_POST["educacion"]);
        $nacionalidad = filtrado($_POST["nacionalidad"]);

        //Utlizamos implode para para pasar el array a  string
        $idiomas = filitrado(",", $_POST["idiomas"]);
        $email = filtrado($_POST["email"]);
        $sitioweb = filtrado($_POST["sitioweb"]);
    }

    
}


function filtrado($datos)
{
    $datos = trim($datos); // Elimina espacios antes y después de los datos
    $datos = stripslashes($datos); // Elimina backslashes \
    $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
    return $datos;
}

?>