<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">evaluacion WEB 1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio1.php">Ejercicio1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio2.php">Ejercicio2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio3.php">Ejercicio3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio4.php">Ejercicio4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio5.php">Ejercicio5</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <h1 class="text-center"> Calculos aritmeticos entre dos numeros </h1>
        <form action="ejercicio1.php" method="POST">
            <div class="form-group row mt-3 justify-content-center">
                <label for="number1" class="col-1"> Numero 1</label>
                <input type="number" name="number1" class="form-control col-2" id="number1" placeholder ="Numero 1">
                <label for="number2" class="col-1"> Numero 2</label>
                <input type="number" name="number2" class="form-control col-2" id="number2" placeholder ="Numero 2">
            </div>
            <div class="form-group row mt-3 justify-content-center">
                <button type="submit" class="btn btn-primary" name="Calculate">Calcular</button>
            </div>
        </form>
    </div>

    <?php
        if (isset($_POST["Calculate"])){
            $suma=$_POST["number1"] + $_POST["number2"];
            $resta=$_POST["number1"] - $_POST["number2"];
            $multiplicacion=$_POST["number1"] * $_POST["number2"];
            $division=$_POST["number1"] / $_POST["number2"];
            
            echo("el resultado de la suma entre ".$_POST["number1"]." y ".$_POST["number2"]." es: ".$suma."<br>");
            
            echo("el resultado de la resta entre ".$_POST["number1"]." y ".$_POST["number2"]." es: ".$resta."<br>");

            echo("el resultado de la multiplicacion entre ".$_POST["number1"]." y ".$_POST["number2"]." es: ".$multiplicacion."<br>");
            
            echo("el resultado de la division entre ".$_POST["number1"]." y ".$_POST["number2"]." es: ".$division."<br>");
        }
    ?>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>