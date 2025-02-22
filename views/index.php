<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Conversor de Monedas</h1>
    <form action="" method="post">
        <label for="monto">Monto a convertir:</label>
        <input type="number" name="monto" id="monto" required>
        <br>
        <label for="moneda_origen">Moneda de origen:</label>
        <select name="moneda_origen" id="moneda_origen" required>
            <option value="USD">Dólar estadounidense</option>
            <option value="EUR">Euro</option>
            <option value="GBP">Libra esterlina</option>
            <option value="JPY">Yen japonés</option>
        </select>
        <br>
        <label for="moneda_destino">Moneda de destino:</label>
        <select name="moneda_destino" id="moneda_destino" required>
            <option value="USD">Dólar estadounidense</option>
            <option value="EUR">Euro</option>
            <option value="GBP">Libra esterlina</option>
            <option value="JPY">Yen japonés</option>
        </select>
        <br>
        <input type="submit" value="Convertir" name="convertir">



    </form>

    <?php
    require_once '../controllers/ExchangeRateContoller.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["convertir"])) {
   
        $exchangeRateController = new ExchangeRateController();

        $monto = $_POST['monto'];
        $exchangeRateController->getRatee($_POST['moneda_origen'], $_POST['moneda_destino']);

        $rate = $exchangeRateController->getRatee($_POST['moneda_origen'], $_POST['moneda_destino']);
        
        if($rate !== false) {
            $resultado = $monto * $rate;
            echo "<div class='result'>";
            echo "<h2>Resultado de la conversión:</h2>";
            echo "<p>{$monto} {$_POST['moneda_origen']} = {$resultado} {$_POST['moneda_destino']}</p>";
            echo "</div>";
        } else {
            echo "<div class='error'>No se pudo realizar la conversión</div>";
        }

        
    }

    ?>
</body>
</html>