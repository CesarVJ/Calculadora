<?php 
if(isset($_GET['num1']) && isset($_GET['num2'])){
    require_once('lib/nusoap.php');
    $cliente = new nusoap_client('http://localhost/Calculadora/servicio.php');
    $resultado= $cliente->call('calculadora',array( 'x' => intval(trim($_GET['num1'])), 'y' =>  intval(trim($_GET['num2'])), 'operacion' => trim($_GET['operacion'])));   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Calculadora</title>
</head>
<body>
<div id="mensaje-alerta" class="alert alert-danger alert-dismissible fade" role="alert">
<strong id="mensaje"></strong>

</div>
    <div class="container contenedor">
        <form action="cliente.php" metod="´post" onsubmit="return verificarDatos()">
            <h1>Ingresa los siguientes datos:</h1> <br>
            <label class="titulo" for="num1">Valor 1: </label>
            <input id="num1" type="number" name="num1"><br>

            <label class="titulo" for="num2">Valor 2: </label>
            <input id="num2" type="number" name="num2"><br>

            <select name="operacion" id="operacion">
                <option value="">Selecciona una operacion</option>
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplica">Multiplicacion</option>
                <option value="divide">Division</option>
            </select> <br>
            <input class="btn btn-success" type="submit" value="Realizar la operacion">
        </form>
        <?php
        if(isset($resultado)){ ?>
            <h2>El resultado de la operacion es <?php echo $resultado?></h2>
        <?php }
    ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>




