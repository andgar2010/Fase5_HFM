<!doctype html>
<html lang="es">

<head>
    <title>Example Calculation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
</head>

<body>

<div class="container">
    <div class="row">
        <br>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form name="form1" action="01Calcular.php" method="POST">
                <div class="row">
                    <div class="col-lg-2">
                        <label for="name">Ingresa número 1:</label>
                    </div>
                    <div class="col-lg-1">
                        <input type="text" name="num1" id="num1"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <label for="name">Ingresa número 2:</label>
                    </div>
                    <div class="col-lg-1">
                        <input type="number" name="num2" id="num2"/>
                    </div>
                </div>
                <input type="submit" value="Calcular"></button>
            </form>

        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>